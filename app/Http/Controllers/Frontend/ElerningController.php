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

        if ($cate_id != null) {
            $elcourses = Elerningcourse::paginate(10);
        
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
        return view('pages.app_elerning.all_courses', compact('elcourses', 'cates', 'mycourse', 'countElerning'));
    }

    public function coursePage($course_id) {

        // เก็บ id ที่ส่งมาเข้า session
        session(['course_id' => $course_id]);
        $session_CourseId = session('course_id');
        
        $course = Elerningcourse::find($session_CourseId);
        $quizzes = Quiz::where('elerningcourse_id', $session_CourseId)->get();
        $announcements = Annoucement::where('elerningcourse_id', $session_CourseId)->get();
        $materials = CourseMaterial::where('elerningcourse_id', $session_CourseId)->get();
        
        return view('pages.app_elerning.course',compact('course', 'announcements', 'quizzes', 'materials'));
    }

    public function courseDetail($course_id) {
        $course = Elerningcourse::find($course_id);
        return view('pages.app_elerning.course_detail',compact('course'));
    }

    // user learning video material
    public function getVideoMat($mat_id){
        $urlvdo = CourseMaterial::find($mat_id);
        if($urlvdo->input_type == 'youtube' || $urlvdo->input_type == 'vimeo'){
            $embed = \Embed::make($urlvdo->video_url)->parseUrl();
            $embed->setAttribute('width', 800); // กำหนดความกว้างตามที่คุณต้องการ
            $embed->setAttribute('height', 450); // กำหนดความสูงตามที่คุณต้องการ
            $course_video = $embed->getHtml();
        } else if ($urlvdo->input_type == 'drive') {
            $width = "1000";
            $course_video = '<iframe src="' . $urlvdo->video_url . '" width="'.$width.'" height="700" allow="autoplay"></iframe>';
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
