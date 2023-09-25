<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PendingTraining;
use Illuminate\Http\Request;

class PendingTrainingController extends Controller
{
    //
    public function pendingTraining() {
        $pendingtraining = PendingTraining::all();
        return view('backend.pages.pen_training.pending_training', compact('pendingtraining'));
    }
}
