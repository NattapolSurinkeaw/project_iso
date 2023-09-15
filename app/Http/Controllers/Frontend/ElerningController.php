<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Elerningcourse;
use App\Models\Quiz;
use App\Models\Annoucement;
use App\Models\MyCourse;

class ElerningController extends Controller
{
    //
    public function elerningPage() {
        $elcourses = Elerningcourse::all();
        if(Auth::check()){
            $user = Auth::user();
            $mycourse = MyCourse::where('user_id', $user->id)->get();
        } else {
            $mycourse = "";
        }

        return view('pages.app_elerning.all_courses', compact('elcourses', 'mycourse'));
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
