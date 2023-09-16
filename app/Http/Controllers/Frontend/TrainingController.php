<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Trainingcourse;
use App\Models\Module;

class TrainingController extends Controller
{
    //
    public function tainingPage() {
        $courses = Trainingcourse::all();
        $modules = Module::all();
        return view('pages.app_training.all_course_training', compact('courses', 'modules'));
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

    public function reserveSuccess() {
        return view('pages.app_training.reserve_success');
    }

    public function reservation(Request $request) {
        // dd($request->all());exit();
        $email = $request->input('reserve_email');
        $id = 6;
        $result = $this->sendEmail($email, $id); // เรียกฟังก์ชันและรับค่าที่ส่งกลับมา

        return response()->json([
            'status' => 'success',
            'message' => 'save data has been saved successfully',
        ], 200);
    }


    public function sendEmail($email, $id)
    {
        $welcomeEmail = new WelcomeEmail();
        $welcomeEmail->setId($id); // กำหนดค่า $id ในอีเมล
        Mail::to($email)->send($welcomeEmail); // ส่งอีเมล

        // $emails = [$email, 'admin@example.com']; // อาเรย์ของที่อยู่อีเมล์
        // Mail::to($emails)->send($welcomeEmail); // ส่งเมลล์ไปยังทุกที่อยู่ในอาเรย์พร้อมกัน
    }


}
