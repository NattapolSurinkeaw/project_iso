<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Trainingcourse;

class BackendTrainingController extends Controller
{
    //
    public function backendTraining() {
        $trainingcourses = Trainingcourse::all();
        return view('backend.pages.backend_training', compact('trainingcourses'));
    }
}
