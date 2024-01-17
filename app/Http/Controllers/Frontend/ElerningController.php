<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Elerningcourse;
use App\Models\Quiz;
use App\Models\Annoucement;
use App\Models\CourseMaterial;
use App\Models\MyCourse;
use App\Models\Category;
use App\Models\UserLerning;

class ElerningController extends Controller
{
    //
    public function elerningPage($cate_id = null) {
        $cates = Category::all();
        $elcourses = null;
        $mycourse = null;
        $countElerning = 0;
        $select_cate = null;

        if ($cate_id != null) {
            foreach($cates as $cate) {
                if($cate->id == $cate_id) {
                    $select_cate = $cate->category_name;
                }
            }
            
            $elcourses = Elerningcourse::where('category', 'LIKE', '%'.$cate_id.'%')->paginate(10);
            // dd($elcourses);

        
            $elcourses = $elcourses->map(function ($elcourse) {
                $elcourse->category = json_decode($elcourse->category, true);
                return $elcourse;
            });
        
            $elcourses = $elcourses->filter(function ($elcourse) use ($cate_id, &$countElerning) {
                if (!is_null($elcourse->category) && is_array($elcourse->category)) {
                    if (in_array($cate_id, $elcourse->category)) {
                        $countElerning++; // เพิ่มจำนวนคอร์สที่เจอ
                        return true;
                    }
                }
                return false;
            });

            if (Auth::check()) {
                $user = Auth::user();
                $mycourse = MyCourse::where('user_id', $user->id)->get();
            } else {
                $mycourse = "";
            }
            
        } else {
            $elcourses = Elerningcourse::paginate(10);
            $countElerning = $elcourses->total();
            if (Auth::check()) {
                $user = Auth::user()->id;
                $mycourse = MyCourse::where('user_id', $user)->get();
            } else {
                $mycourse = "";
            }
        }
        return view('pages.app_elerning.all_courses', compact('elcourses', 'cates', 'mycourse', 'countElerning', 'select_cate'));
    }

    public function coursePage($course_id) {
        $user_id = Auth::user()->id;
        $myCourse = MyCourse::where('elerningcourse_id', $course_id)->where('user_id', $user_id)->first();
        if(!$myCourse){
            return redirect('/elerning');
        }
        // เก็บ id ที่ส่งมาเข้า session
        session(['course_id' => $course_id]);
        $session_CourseId = session('course_id');
        
        $course = Elerningcourse::find($session_CourseId);
        $quizzes = Quiz::where('elerningcourse_id', $session_CourseId)->get();
        $announcements = Annoucement::where('elerningcourse_id', $session_CourseId)->get();
        $materials = CourseMaterial::where('elerningcourse_id', $session_CourseId)->get();

        $userLearning = UserLerning::where('elearning_id', $session_CourseId)
        ->where('user_id', $user_id)
        ->first();
        if ($userLearning && $userLearning->watch_video) {
            $watch_video = array_filter(explode(',', $userLearning->watch_video));
        } else {
            $watch_video = [];
        }
        
        return view('pages.app_elerning.course',compact('course', 'announcements', 'quizzes', 'materials', 'watch_video'));
    }

    public function courseDetail($course_id) {
        $course = Elerningcourse::find($course_id);

        if(Auth::check()){
            $user_id = Auth::user()->id;
            $mycourse = MyCourse::where('user_id', $user_id)
                                ->where('elerningcourse_id', $course_id)
                                ->first();
        } else {
            $mycourse = [];
        }
        
        return view('pages.app_elerning.course_detail',compact('course', 'mycourse'));
    }

    // user learning video material
    public function getVideoMat(Request $request, $mat_id){
        $display = $request->input('display');
        
        $width = null;
        $height = null;
        if($display == '2xl') {
            $width = 1450;
            $height = 768;
        } elseif($display == 'xl') {
            $width = 1000;
            $height = 500;
        } elseif($display == 'lg') {
            $width = 768;
            $height = 400;
        } elseif($display == 'md') {
            $width = 640;
            $height = 400;
        } elseif($display == 'xs') {
            $width = 375;
            $height = 300;
        }

        $urlvdo = CourseMaterial::find($mat_id);
        if($urlvdo->input_type == 'youtube' || $urlvdo->input_type == 'vimeo'){
            $embed = \Embed::make($urlvdo->video_url)->parseUrl();
            $embed->setAttribute('width', $width);  // กำหนดค่า width
            $embed->setAttribute('height', $height); // กำหนดค่า height
            $course_video = $embed->getHtml();
        } else if ($urlvdo->input_type == 'drive') {
            $width = "1000";
            $course_video = '<iframe src="' . $urlvdo->url . '" width="'.$width.'" height="'.$height.'" allow="autoplay"></iframe>';
        } else {
            $course_video = "ไม่มีวิดีโอ";
        }
        
        if (empty($urlvdo)) {
            return response([
                "status" => "404",
                "message" => "Data Not Found", 
            ], 404);
        } else {
            return response([
                "status" => "200",
                "data" => $course_video, 
            ], 200);
        }
    }

    public function learningvideo(Request $request, $mat_video) {
        $user = Auth::user()->id;
        
        $user_learn = UserLerning::where('user_id', $user)
            ->where('elearning_id', $request->course_id) // ใช้ request ในการรับค่า course_id ที่ส่งมา
            ->first(); // ใช้ first() เพื่อดึงข้อมูลเดียว
        
        if (!$user_learn) {
            $user_learn = new UserLerning;
            $user_learn->elearning_id = $request->course_id;
            $user_learn->user_id = $user;
            $user_learn->watch_video = $mat_video;
            $user_learn->save();
    
            return response()->json([
                'status' => 'success',
                'message' => 'watch video successfully'
            ], 201);
        } else {
            if (strpos($user_learn->watch_video, $mat_video) === false) {
                // ถ้า $mat_video ไม่อยู่ใน $user_learn->watch_video
                $user_learn->watch_video .= "," . $mat_video;
                $user_learn->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'watch video successfully'
                ], 201);
            } else {
                return response()->json([
                    'status' => 'success',
                    'message' => 'watch video'
                ], 200);
            }
        }
    }
}
