<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Elerningcourse;
use App\Models\Quiz;
use App\Models\Annoucement;

class ElerningController extends Controller
{
    //
    public function elerningPage() {
        $elcourses = Elerningcourse::all();

        return view('pages.app_elerning.all_courses', compact('elcourses'));
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

    public function courseDetail($id) {

        $course = Elerningcourse::find($id);
        return view('pages.app_elerning.course_detail',compact('course'));
    }
}
