<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Trainingcourse;

class TrainingController extends Controller
{
    //
    public function tainingPage() {
        $courses = Trainingcourse::all();
        
        return view('pages.app_training.all_course_training', compact('courses'));
    }

    public function calendarReserve($train_id) {
        $training = Trainingcourse::find($train_id);
        $trainings = Trainingcourse::all();
        return view('pages.app_training.calendar_reserve', compact('train_id', 'training', 'trainings'));
    } 
    
    public function trainingForm () {

        $courses = Trainingcourse::all(); // เรียก courses ทั้งหมดไปแสดงใน select
        
        $course_id = request('course_id');
        $course = Trainingcourse::find($course_id);

        return view('pages.app_training.training_form', compact('course','courses'));
    }

    public function reservation() {
        return view('pages.app_training.reserve_success');
    }

    public function sendEmail($email)
    {
        Mail::to($email)->send(new WelcomeEmail()); // ต้องส่ง $param เข้าไป
        return redirect('/reserve_success');
    }


}
