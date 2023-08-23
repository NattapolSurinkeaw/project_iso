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

    public function detailCourse($id) {
        $course = Elerningcourse::find($id);
        return view('backend.pages.backend_coursedetail', compact('course'));
    }

    //  API Methods
    public function createCourse(Request $request) {
        $request->validate([
            'course_name' => 'required',
            'user_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            // 'imgcourse' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // เพิ่มการตรวจสอบรูปภาพ
            'img_course' => 'required',
        ]);
    
        // อัปโหลดไฟล์รูปภาพและเก็บลงในโฟลเดอร์ที่กำหนด
        // $imgPath = $request->file('imgcourse')->store('course_images', 'public');
    
        // สร้างคอร์ส Elerningcourse ใหม่
        Elerningcourse::create([
            'course_name' => $request->input('course_name'),
            'user_name' => $request->input('user_name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'img_course' => $request->input('img_course'),
        ]);
    
        return response([
            'status' => 'success',
            'message' => 'Course created successfully.',
        ], 200);
    }
}
