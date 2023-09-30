<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Elerningcourse;
use App\Models\Quiz;
use App\Models\Annoucement;
use App\Models\MyCourse;
use App\Models\Category;

class ElerningController extends Controller
{
    //
    public function elerningPage($cate_id = null) {
        $cates = Category::all();
        $elcourses = null;
        $mycourse = null;

        if ($cate_id != null) {
            $elcourses = Elerningcourse::paginate(10);
        
            $elcourses = $elcourses->map(function ($elcourse) {
                $elcourse->category = json_decode($elcourse->category, true);
                return $elcourse;
            });
        
            $elcourses = $elcourses->filter(function ($elcourse) use ($cate_id) {
                if (!is_null($elcourse->category) && is_array($elcourse->category)) {
                    return in_array($cate_id, $elcourse->category);
                }
                return false;
            });

            if (Auth::check()) {
                $user = Auth::user();
                $mycourse = MyCourse::where('user_id', $user->id)->get();
            } else {
                $mycourse = "";
            }
            // $elcourses = $elcourses->toArray();
            // dd($elcourses);
            // exit();
        } else {
            $elcourses = Elerningcourse::paginate(10);
            if (Auth::check()) {
                $user = Auth::user();
                $mycourse = MyCourse::where('user_id', $user->id)->get();
            } else {
                $mycourse = "";
            }
        }
    
        // dd($elcourses);
            // exit();
        return view('pages.app_elerning.all_courses', compact('elcourses', 'cates', 'mycourse'));
    }

    public function coursePage($course_id) {

        // เก็บ id ที่ส่งมาเข้า session
        session(['course_id' => $course_id]);
        $sessionCourseId = session('course_id');
        
        $course = Elerningcourse::find($sessionCourseId);
        $quizzes = Quiz::where('elerningcourse_id', $course_id)->get();
        $announcements = Annoucement::where('elerningcourse_id', $course_id)->get();
        
        return view('pages.app_elerning.course',compact('course', 'announcements', 'quizzes'));
    }

    public function courseDetail($course_id) {

        $course = Elerningcourse::find($course_id);
        return view('pages.app_elerning.course_detail',compact('course'));
    }
}
