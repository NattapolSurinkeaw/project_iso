<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PendingTraining;
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
        return view('backend.pages.pen_training.backend_pending_trainingdetail');
    }
}
