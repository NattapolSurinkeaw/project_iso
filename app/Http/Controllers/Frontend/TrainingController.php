<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Trainingcourse;
use App\Models\Module;
use App\Models\PendingTraining;
use App\Models\BillingTo;
use App\Models\OtherTraining;

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
        $validator = Validator::make($request->all(), [
            'company' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'position' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'fax' => 'required',

            'bil_company' => 'required',
            'bil_address' => 'required',
            'bil_tax_id' => 'required',
            'bil_contact' => 'required',
            'bil_title' => 'required',
            'bil_phone' => 'required',
            'bil_email' => 'required',
            'bil_fax' => 'required',

            'training_reserve' => 'required',
            'code_train' => 'required',
            'fee_train' => 'required',
            'number_participants' => 'required',
            'date_reserve' => 'required',
            
            'reserve_name' => 'required',
            'reserve_position' => 'required',
            'reserve_tel' => 'required',
            'reserve_email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'validation failed please try again'
            ], 401);
        }

        $billing = new BillingTo;
        $billing->bil_company = $request->input('bil_company');
        $billing->bil_address = $request->input('bil_address');
        $billing->bil_tax_id = $request->input('bil_tax_id');
        $billing->bil_contact = $request->input('bil_contact');
        $billing->bil_title = $request->input('bil_title');
        $billing->bil_phone = $request->input('bil_phone');
        $billing->bil_email = $request->input('bil_email');
        $billing->bil_fax = $request->input('bil_fax');
        $billing->save();
        
        $user = Auth::user()->id;
        $pendingTrain = new PendingTraining;
        $pendingTrain->user_id = $user;
        $pendingTrain->billing_id = $billing->id;
        $pendingTrain->company = $request->input('company');
        $pendingTrain->address = $request->input('address');
        $pendingTrain->contact = $request->input('contact');
        $pendingTrain->position = $request->input('position');
        $pendingTrain->phone = $request->input('phone');
        $pendingTrain->email = $request->input('email');
        $pendingTrain->fax = $request->input('fax');
        $pendingTrain->training_reserve = $request->input('training_reserve');
        $pendingTrain->code_train = $request->input('code_train');
        $pendingTrain->fee = $request->input('fee_train');
        $pendingTrain->number_participants = $request->input('number_participants');
        $pendingTrain->date_reserve = $request->input('date_reserve');
        $pendingTrain->special_request = $request->input('special_request');
        $pendingTrain->reserve_name = $request->input('reserve_name');
        $pendingTrain->reserve_position = $request->input('reserve_position');
        $pendingTrain->reserve_tel = $request->input('reserve_tel');
        $pendingTrain->reserve_email = $request->input('reserve_email');
        $pendingTrain->status = "pending";
        $pendingTrain->save();

        $otherReservations = $request->input('otherReservations'); // ข้อมูลจาก user

        if (!is_null($otherReservations) && !empty($otherReservations)) {
            foreach ($otherReservations as $reservationData) {
                $othertrain = new OtherTraining;
                $othertrain->pending_id = $pendingTrain->id;
            
                $othertrain->other_course = $reservationData['othercourse'];
                $othertrain->other_date = $reservationData['otherdatereserve'];
            
                $othertrain->save();
            }
        }

        $email = $request->input('reserve_email');
        $result = $this->sendEmail($email, $pendingTrain->id); // เรียกฟังก์ชันและรับค่าที่ส่งกลับมา

        return response()->json([
            'status' => 'success',
            'message' => 'save data has been saved successfully',
        ], 201);
    }


    public function sendEmail($email, $id)
    {
        $welcomeEmail = new WelcomeEmail();
        $welcomeEmail->setId($id); // กำหนดค่า $id ในอีเมล
        Mail::to($email)->send($welcomeEmail); // ส่งอีเมล

        // $emails = [$email, 'admin@example.com']; // อาเรย์ของที่อยู่อีเมล์
        // Mail::to($emails)->send($welcomeEmail); // ส่งเมลล์ไปยังทุกที่อยู่ในอาเรย์พร้อมกัน
    }

    public function testemail() {
        $pendingtrain = PendingTraining::find(5);
        $otherTrainings = OtherTraining::where('pending_id', $pendingtrain->id)
        ->join('trainingcourses', 'other_trainings.other_course', '=', 'trainingcourses.id')
        ->select('other_trainings.*','trainingcourses.code', 'trainingcourses.name', 'trainingcourses.fee')
        ->get();
        // dd($otherTrainings);exit();
        return view('emails.welcome', compact('pendingtrain', 'otherTrainings'));
    }


}
