<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendingCourseController extends Controller
{
    //
    public function pendingCourse() {
        return view('backend.pages.pending_course');
    }
}
