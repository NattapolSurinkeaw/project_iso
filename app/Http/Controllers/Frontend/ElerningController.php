<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElerningController extends Controller
{
    //
    public function elerningPage() {
        $elcourses = Elerningcourse::all();

        return view('pages.app_elerning.all_courses',[
            "elcourses" => $elcourses
        ]);
    }

    public function coursePage($id) {
        
        $course = Elerningcourse::find($id);

        session(['id' => $id]);

        return view('pages.app_elerning.course',compact('course'));
    }

    public function courseDetail($id) {

        $course = Elerningcourse::find($id);
        return view('pages.app_elerning.course_detail',compact('course'));
    }
}
