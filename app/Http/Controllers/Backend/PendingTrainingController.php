<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EventReserveTrain;
use App\Models\PendingTraining;
use App\Models\Trainingcourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function updatePendingTrain(Request $request, $pen_id) {
        $pendingtrain = PendingTraining::find($pen_id);
        if (!$pendingtrain) { // ถ้า $pendingtrain เป็น null
            return response()->json([
                'status' => 'error',
                'message' => 'training not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        // dd($inputStatus);
        $inputStatus = $request->input('status');
        if($pendingtrain->status != $inputStatus){
            $pendingtrain->status = $inputStatus;
            $pendingtrain->save();

            if ($inputStatus == 'approve') {
                $eventreserve = EventReserveTrain::where('pending_id', $pen_id)->first();
                if (!$eventreserve) {
                    $eventreserve = new EventReserveTrain;
                    $eventreserve->pending_id = $pen_id;
                    $eventreserve->reserve_name = $pendingtrain->company;
                    $eventreserve->reserve_date = $pendingtrain->date_reserve;
                    $eventreserve->save();
                } else {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Event reservation already exists',
                    ], 200); // ส่ง JSON response และจบโปรแกรม
                }
            }
            
            return response()->json([
                'status' => 'success',
                'message' => 'Save data is success',
            ], 201);
        } else {
            return response()->json([
                'status' => 'success',
                'message' => 'Nothing has changed',
            ], 201);
        }

        
    }
}
