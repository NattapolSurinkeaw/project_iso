<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PendingCourse;
use App\Models\Elerningcourse;

class PendingCourseController extends Controller
{
    //
    public function pendingCourse() {
        $pendingcourses = PendingCourse::orderBy('id', 'desc')->get();

        $courses = Elerningcourse::all();
        
        return view('backend.pages.pending_course', compact('pendingcourses', 'courses'));
    }

    public function pendingCourseDetail($pen_id) {
        $pendingcourse = PendingCourse::find($pen_id);

        $pendingcourse->reading = "yes";
        $pendingcourse->save();

        $totalCoursesData = explode(',', $pendingcourse->total_courses);
    
        $courses = [];
        foreach ($totalCoursesData as $courseId) {
            $course = Elerningcourse::find($courseId);
            if ($course) {
                $courses[] = $course;
            }
        }

        return view('backend.pages.backend_pending_coursedetail', compact('pendingcourse', 'courses'));
    }
}
