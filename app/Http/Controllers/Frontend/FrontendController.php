<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Elerningcourse;

class FrontendController extends Controller
{
    //
    // public function index() {

    //     $user = Auth::user();
    //     return view('layouts.main', [
    //         'user' => $user
    //     ]);
    // }

    public function elerningPage() {
        $elcourses = Elerningcourse::all();

        return view('pages.app_elerning.all_courses',[
            "elcourses" => $elcourses
        ]);
    }

    public function coursePage($id) {
        
        $course = Elerningcourse::find($id);

        return view('pages.app_elerning.course',compact('course'));
    }

    public function courseDetail() {
        return view('pages.app_elerning.course_detail');
    }

    public function tainingPage() {
        $courses = Course::all();

        return view('pages.app_training.all_course_training',[
            "courses" => $courses
        ]);
    }

    public function newsAndEventPage() {
        return view('pages.app_NewsAndEvent.newsAndEvent');
    }

    public function newsDetail() {
        return view('pages.app_NewsAndEvent.newsDetail');
    }

    public function contactPage() {
        return view('pages.app_iso.contact');
    }

    public function calendarReserve($course_id) {
        return view('pages.app_training.calendar_reserve', compact('course_id'));
    } 
    
    public function trainingForm () {

        $courses = Course::all(); // เรียก courses ทั้งหมดไปแสดงใน select
        
        $course_id = request('course_id');
        $course = Course::find($course_id);

        return view('pages.app_training.training_form', compact('course','courses'));
    }

    public function emailForm() {
        return view('emails.welcome');
    }

    public function cartPage() {
        return view('pages.app_cart.cart');
    }

    public function paymentForm() {
        return view('pages.app_cart.paymentform');
    }

    public function startQuiz() {
        return view('pages.app_quiz.start_quiz');
    }

    public function all_quiz() {
        return view('pages.app_quiz.all_quiz');
    }

    public function score_sumary() {
        return view('pages.app_quiz.score_sumary');
    }
    
}
