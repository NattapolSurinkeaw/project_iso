<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Elerningcourse;
use App\Models\Annoucement;
use App\Models\Quiz;

class CourseController extends Controller
{
    //
    public function backendCourse() {
        $courses = Elerningcourse::all();
        return view('backend.pages.backend_course', compact('courses'));
    }

    public function detailCourse($id_course) {
        $course = Elerningcourse::find($id_course);
        $announcements = Annoucement::where('elerningcourse_id', $id_course)->get();
        $quizzes = Quiz::where('elerningcourse_id', $id_course)->get();
        return view('backend.pages.backend_coursedetail', compact('course', 'announcements', 'quizzes'));
    }

    //  API Methods
    public function createCourse(Request $request) {
        $request->validate([
            'course_name' => 'required',
            'user_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            // 'imgcourse' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // เพิ่มการตรวจสอบรูปภาพ
            // 'img_course' => 'required',
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

    public function editCourse(Request $request, $id_course) {
        $course = Elerningcourse::find($id_course);
        
        if(!$course){
            return response()->json([
                'status' => 'error',
                'message' => 'Course not found'
            ], 404);
        } 

        $request->validate([
            'course_name' => 'required',
            'user_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'img_course' => 'required',
        ]);

        $course->course_name = $request->input('course_name');
        $course->user_name = $request->input('user_name');
        $course->price = $request->input('price');
        $course->description = $request->input('description');
        $course->img_course = $request->input('img_course');
        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Course updated successfully'
        ], 200);
    }


    public function createAnnouce(Request $request) {

        // รับข้อมูลจาก Request
        $data = $request->all();

        // สร้าง Announcement ใหม่
        $announcement = new Annoucement([
            'content' => $data['content'],
            'elerningcourse_id' => $data['courseId']
        ]);

        // บันทึกข้อมูลลงฐานข้อมูล
        $announcement->save();

        // ส่ง response กลับไปหา Client
        return response()->json([
            'status' => 'success',
            'message' => 'Announcement created successfully.',
            'data' => $announcement, // ส่งข้อมูล Announcement ที่ถูกสร้างให้กับ Client ถ้าต้องการ
        ], 200);
    }

    public function getAnnouce($id_ann) {
        $data = Annoucement::find($id_ann);

        if(empty($data)){
            return response()->json([
                'status' => 'error',
                'message' => 'not found Annoucement',
            ],400);
        } else {
            return response()->json([
                'status' => 'success',
                'data' => $data,
            ],200);
        }
    }

    public function editAnnouncement(Request $request, $id_ann)
    {
        // รับข้อมูลจาก Request
        $content = $request->input('content'); // รับค่า content จาก Request

        // ค้นหา Announcement ที่ต้องการแก้ไขโดยใช้ $id_ann
        $announcement = Annoucement::find($id_ann);

        if (!$announcement) {
            return response()->json([
                'status' => 'error',
                'message' => 'Announcement not found',
            ], 404);
        }

        // แก้ไขฟิลด์ content และบันทึกข้อมูล
        $announcement->content = $content;
        $announcement->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Announcement updated successfully',
            'data' => $announcement,
        ], 200);
    }

    public function deleteAnnouncement($id_ann) {
        try {
            $announcement = Annoucement::find($id_ann);

            if (!$announcement) {
                return response()->json([
                    'status' => 400,
                    'message' => 'ไม่พบประกาศ'
                ], 400);
            }

            $announcement->delete();

            return response()->json([
                'status' => 200,
                'message' => 'ลบประกาศสำเร็จ'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'เกิดข้อผิดพลาดในการลบประกาศ: ' . $e->getMessage()
            ], 500);
        }
    }
}
