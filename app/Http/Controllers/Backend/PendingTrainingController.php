<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendingTrainingController extends Controller
{
    //
    public function pendingTraining() {
        return view('backend.pages.pen_training.pending_training');
    }
}
