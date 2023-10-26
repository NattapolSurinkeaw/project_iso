<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PendingTraining;
use App\Models\Trainingcourse;
use App\Models\OtherTraining;
use PDF;

class PDFController extends Controller
{
    //
    public function generatepdf() {
        $user = Auth::user();
        $pdf = PDF::loadView('pdf.certificate', compact('user'));
        return $pdf->stream();
        // return $pdf->download('certificate.pdf');
    }

    public function genarateQuotation($pen_id) {
        // $pendingTraining = PendingTraining::with('otherTrainings', 'billingTo')->find($pen_id);
        
        // $trainingCourseNames = [];

        // // วนลูปผ่านทุกๆ รายการใน otherTrainings
        // foreach ($pendingTraining->otherTrainings as $otherTraining) {
        //     // ดึงค่า ID จาก other_course
        //     $otherCourseId = $otherTraining->other_course;

        //     // ค้นหา Trainingcourse จาก ID ในตาราง Trainingcourse
        //     $trainingCourse = Trainingcourse::find($otherCourseId);

        //     // ถ้าค้นหาเจอ ให้เก็บชื่อลงในอาเรย์
        //     if ($trainingCourse) {
        //         $trainingCourseNames[] = $trainingCourse->name;
        //     }
        // }
        $pendingTraining = PendingTraining::with('otherTrainings', 'billingTo')->find($pen_id);
        $otherTrainings = OtherTraining::where('pending_id', $pendingTraining->id)
        ->join('trainingcourses', 'other_trainings.other_course', '=', 'trainingcourses.id')
        ->select('other_trainings.*','trainingcourses.code', 'trainingcourses.name', 'trainingcourses.fee')
        ->get();
        // dd($otherTrainings);
        // dd($pendingTraining);
        $pdf = PDF::loadView('pdf.quotation', compact('pendingTraining', 'otherTrainings'));
        return $pdf->stream();
        // return $pdf->download('quotation.pdf');
    }

    public function formver(){
        $user = Auth::user();
        return view('pdf.certificate', compact('user'));
    }
}
