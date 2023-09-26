<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PendingTraining;
use App\Models\Trainingcourse;
use Illuminate\Http\Request;

class PendingTrainingController extends Controller
{
    //
    public function pendingTraining() {
        $pendingtraining = PendingTraining::join('users', 'pending_trainings.user_id', '=', 'users.id')
        ->select('pending_trainings.*', 'users.email as user_email')
        ->get();

        return view('backend.pages.pen_training.pending_training', compact('pendingtraining'));
    }

    public function pendingTrainingDetail($pen_id) {
        $pendingTraining = PendingTraining::with('otherTrainings', 'billingTo')->find($pen_id);

        $trainingCourseNames = [];

    // วนลูปผ่านทุกๆ รายการใน otherTrainings
        foreach ($pendingTraining->otherTrainings as $otherTraining) {
            // ดึงค่า ID จาก other_course
            $otherCourseId = $otherTraining->other_course;

            // ค้นหา Trainingcourse จาก ID ในตาราง Trainingcourse
            $trainingCourse = Trainingcourse::find($otherCourseId);

            // ถ้าค้นหาเจอ ให้เก็บชื่อลงในอาเรย์
            if ($trainingCourse) {
                $trainingCourseNames[] = $trainingCourse->name;
            }
        }
        return view('backend.pages.pen_training.backend_pending_trainingdetail', compact('pendingTraining', 'trainingCourseNames'));
    }
}
