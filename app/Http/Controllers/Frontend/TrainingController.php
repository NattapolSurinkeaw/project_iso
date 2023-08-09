<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class TrainingController extends Controller
{
    //
    public function tainingPage() {
        $courses = Course::all();
        
        return view('pages.app_training.all_course_training',[
            "courses" => $courses
        ]);
    }

    public function calendarReserve($course_id) {
        $course = Course::find($course_id);
        return view('pages.app_training.calendar_reserve', compact('course_id', 'course'));
    } 
    
    public function trainingForm () {

        $courses = Course::all(); // เรียก courses ทั้งหมดไปแสดงใน select
        
        $course_id = request('course_id');
        $course = Course::find($course_id);

        return view('pages.app_training.training_form', compact('course','courses'));
    }


}
