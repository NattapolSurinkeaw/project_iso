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
        $sessionCourseId = session('course_id');
        
        $course = Elerningcourse::find($sessionCourseId);
        $quizzes = Quiz::where('elerningcourse_id', $course_id)->get();
        $announcements = Annoucement::where('elerningcourse_id', $course_id)->get();
        
        $user = Auth::user()->id;
        $user_learning = UserLerning::where('user_id', $user)->get();
        $materials = CourseMaterial::where('elerningcourse_id', $course_id)->get();
        // dd($materials);exit();
        return view('pages.app_elerning.course',compact('course', 'announcements', 'quizzes', 'materials'));
    }

    public function courseDetail($course_id) {

        $course = Elerningcourse::find($course_id);
        return view('pages.app_elerning.course_detail',compact('course'));
    }
}
