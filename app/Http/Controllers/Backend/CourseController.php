<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Elerningcourse;

class CourseController extends Controller
{
    //
    public function backendCourse() {
        $courses = Elerningcourse::all();
        return view('backend.pages.backend_course', compact('courses'));
    }
}
