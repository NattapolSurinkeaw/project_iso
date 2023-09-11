<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\PendingCourse;
use App\Models\Elerningcourse;
use App\Models\MyCourse;

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

        if($pendingcourse->reading === "no"){
            $pendingcourse->reading = "yes";
            $pendingcourse->save();
        }

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

    public function approvePendindCourse(Request $request,$pen_id) {
        $pendingcourse = PendingCourse::find($pen_id);

        if(empty($pendingcourse)){
            return response()->json([
                'status' => 'error',
                'message' => 'pendind course not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'course' => 'required',
            'userId' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        $input_status = $request->input('status');
        $user_id = $request->input('userId');

        $pendingcourse->status = $input_status;
        $pendingcourse->comment = $request->input('comment');
        $pendingcourse->save();

        
        $mycourses = MyCourse::where('user_id', $user_id)->get();

        $arr_mycourse = [];
        foreach ($mycourses as $mycourse) {
            $arr_mycourse[] = $mycourse->elerningcourse_id;
        }
        $arr_mycourse = array_flip($arr_mycourse);
        
        $totalCoursesData = explode(',', $pendingcourse->total_courses);
        
        $uniqueCourses = array_diff($totalCoursesData, array_keys($arr_mycourse));
        // dd($arr_mycourse);exit();

        if($input_status === "approve"){

            foreach ($uniqueCourses as $courseId) {
                $add_myCourse = new MyCourse();
                $add_myCourse->user_id = $user_id;
                $add_myCourse->elerningcourse_id = $courseId;
                $add_myCourse->save();
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'save data successfully'
        ], 200);
    }
}
