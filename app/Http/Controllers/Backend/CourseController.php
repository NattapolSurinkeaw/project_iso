<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\Elerningcourse;
use App\Models\Annoucement;
use App\Models\Category;
use App\Models\Quiz;
use App\Models\Question;

class CourseController extends Controller
{
    //
    public function backendCourse() {
        $courses = Elerningcourse::all();
        return view('backend.pages.elearning.backend_course', compact('courses'));
    }

    public function detailCourse($id_course) {
        $course = Elerningcourse::find($id_course);
        $announcements = Annoucement::where('elerningcourse_id', $id_course)->get();
        $quizzes = Quiz::where('elerningcourse_id', $id_course)->get();
        $cates = Category::all();
        return view('backend.pages.elearning.backend_coursedetail', compact('course', 'announcements', 'quizzes', 'cates'));
    }

    public function allQuestionTable($quiz_id) {
        $questions = Question::whereHas('quiz', function ($query) use ($quiz_id) {
            $query->where('id', $quiz_id);
        })->get();
        $quiz_name = Quiz::find($quiz_id);
        // dd($quiz_name);
        return view('backend.pages.quiz.backend_tablequestion', compact('questions','quiz_name'));
    }



    //  API Methods
    public function createCourse(Request $request) {
        $request->validate([
            'course_name' => 'required',
            'user_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'details' => 'required',
            'imgCourse' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // เพิ่มการตรวจสอบรูปภาพ
        ]);
    
        $image = $request->file('imgCourse');
        $imgName = '/upload/images/course/'.time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images/course'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
    
        // สร้างคอร์ส Elerningcourse ใหม่
        Elerningcourse::create([
            'course_name' => $request->input('course_name'),
            'user_name' => $request->input('user_name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'details' => $request->input('details'),
            'img_course' => $imgName,
        ]);
    
        return response([
            'status' => 'success',
            'message' => 'Course created successfully.',
        ], 200);
    }

    public function editCourse(Request $request, $id_course) {
        // dd($request->all());exit();
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
            'details' => 'required'
        ]);

    
        $course->course_name = $request->input('course_name');
        $course->user_name = $request->input('user_name');
        $course->price = $request->input('price');
        $course->description = $request->input('description');
        $course->details = $request->input('details');

        if ($request->hasFile('imgCourse') && $request->file('imgCourse')->isValid()) {
            $image = $request->file('imgCourse');
            $imgName = '/upload/images/course/' . time() . '.' . $image->getClientOriginalExtension();

            // ตรวจสอบว่ามีรูปเก่าใน $user->img_profile หรือไม่
            if (!empty($course->img_course)) {
                // ถ้ามีรูปเก่า ให้ลบไฟล์เก่าที่อยู่ใน $user->img_profile
                File::delete(public_path($course->img_course));
            }

            $image->move(public_path('upload/images/course'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
            $course->img_course = $imgName;
        }

        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Course updated successfully'
        ], 200);
    }

    public function delCourse($id_course) {
        $course = Elerningcourse::find($id_course);
        if(!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'Course not found'
            ], 404);
        }

        $course->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Course deleted successfully'
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

    public function createMeterial(Request $request) {
        dd($request->all());exit();
    }

    public function createQuiz(Request $request) {
        $validator = Validator::make($request->all(), [
            'courseId' => 'required',
            'quiz_name' => 'required',
            'quiz_type' => 'required',
            'quiz_timer' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        Quiz::create([
            'elerningcourse_id' => $request->input('courseId'),
            'quiz_name' => $request->input('quiz_name'),
            'quiz_type' => $request->input('quiz_type'),
            'timer' => $request->input('quiz_timer'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'บันทึกข้อมูล Quiz สำเร็จ'
        ], 200);

    }

    public function getQuiz($id_quiz) {
        $quiz = Quiz::find($id_quiz);

        if (!$quiz) {
            return response()->json([
                'status' => 'error',
                'message' => 'not found Quiz',
            ], 400);
        }

        return response()->json([
            'status' => 'success',
            'data'  => $quiz,
        ], 200);
    }

    public function editQuiz(Request $request, $id_quiz) {
        $quiz = Quiz::find($id_quiz);

        if (!$quiz) {
            return response()->json([
                'status' => 'error',
                'message' => 'not found Quiz',
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'quiz_name' => 'required',
            'quiz_type' => 'required',
            'quiz_timer' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        $quiz->quiz_name = $request->input('quiz_name');
        $quiz->timer = $request->input('quiz_timer');
        $quiz->quiz_type = $request->input('quiz_type');

        $quiz->save();

        return response()->json([
            'status' => 'success',
            'message' => 'แก้ไขข้อมูล Quiz สำเร็จ',
        ], 200);
    }

    public function delQuiz($id_quiz) {
        $quiz = Quiz::find($id_quiz);

        if (!$quiz) {
            return response()->json([
                'status' => 'error',
                'message' => 'not found Quiz',
            ], 400);
        }

        $quiz->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'delete quiz successfully',
        ], 200);

    }

    public function createQuestion(Request $request) {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'quiz_id' => 'required',
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
            'answer' => 'required',
            'score' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }
        // dd($validator->data);exit();

        $question = new Question();
        $question->question = $request->input('question');
        $question->quiz_id = $request->input('quiz_id');
        $question->choice1 = $request->input('choice1');
        $question->choice2 = $request->input('choice2');
        $question->choice3 = $request->input('choice3');
        $question->choice4 = $request->input('choice4');
        $question->answer = $request->input('answer');
        $question->score = $request->input('score');
        $question->save();

        return response()->json([
            'status' => 'success',
            'message' => 'create quiz successfully'
        ], 200);
    }

    public function getQuestionById($ques_id) {
        $question = Question::find($ques_id);

        if(!$question) {
            return response()->json([
                'status' => 'error',
                'message' => 'question not found'
            ], 400);
        }

        return response()->json([
            'status' => 'success',
            'data' => $question,
        ], 200);
    }

    public function editQuestion(Request $request, $quest_id) {
        $question = Question::find($quest_id);

        if(!$question) {
            return response()->json([
                'status' => 'error',
                'message' => 'question not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'quiz_id' => 'required',
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
            'answer' => 'required',
            'score' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        $question->question = $request->input('question');
        $question->quiz_id = $request->input('quiz_id');
        $question->choice1 = $request->input('choice1');
        $question->choice2 = $request->input('choice2');
        $question->choice3 = $request->input('choice3');
        $question->choice4 = $request->input('choice4');
        $question->answer = $request->input('answer');
        $question->score = $request->input('score');
        $question->save();

        return response()->json([
            'status' => 'success',
            'message' => 'create quiz successfully'
        ], 200);
    }

    public function delQuestion($quest_id) {
        $question = Question::find($quest_id);

        if(!$question) {
            return response()->json([
                'status' => 'error',
                'message' => 'question not found',
            ], 404);
        }

        $question->delete();
    
        return response()->json([
            'status' => 'success',
            'message' => 'question deleted successfully',
        ], 200);
    }

    public function createCate(Request $request) {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|unique:categories',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        $cate = new Category;
        $cate->category_name = $request->input('category_name');
        $cate->save();

        return response()->json([
            'status' => 'success',
            'message' => 'created category successfully',
        ], 201);
    }

    public function addCategory(Request $request, $id_course) {
        $course = Elerningcourse::find($id_course);

        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'course not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        $course->category = $request->input('category');
        $course->save();
        return response()->json([
            'status' => 'success',
            'message' => 'add category successfully'
        ], 201);

    }
    
}
