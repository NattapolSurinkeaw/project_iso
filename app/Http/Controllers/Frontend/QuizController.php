<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Elerningcourse;
use App\Models\UserLerning;
use App\Models\CourseMaterial;

class QuizController extends Controller
{
    //
    public function quizStart($quiz_id) {
        $session_CourseId = session('course_id');
        $course = Elerningcourse::find($session_CourseId);
        $quiz = Quiz::find($quiz_id);
    
        $questionCount = Question::where('quiz_id', $quiz_id)->count();
        $totalScore = Question::where('quiz_id', $quiz_id)->sum('score');

        if($quiz->quiz_type == 'posttest'){
            $user_id = Auth::user()->id;
            $user_learning = UserLerning::where('user_id', $user_id)
            ->where('elearning_id', $session_CourseId)
            ->first();
            if(!$user_learning) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You haven not finished studying yet.'
                ], 200);
            }
            $video_ids = explode(',', $user_learning->watch_video);

            $materials = CourseMaterial::where('elerningcourse_id', $session_CourseId)->get();
            $materialIds = $materials->pluck('id')->toArray();

            // นับจำนวนวัสดุที่อยู่ในทั้งสองรายการ
            $commonCount = count(array_intersect($materialIds, $video_ids));
            
            $materialCount = count($materialIds);

            if ($commonCount == $materialCount) {
                return view('pages.app_quiz.start_quiz', compact('course', 'quiz', 'questionCount', 'totalScore')); // เพิ่ม 'questions'
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You haven not finished studying yet.'
                ], 200);
            }
        }
        return view('pages.app_quiz.start_quiz', compact('course', 'quiz', 'questionCount', 'totalScore')); // เพิ่ม 'questions'
    }

    public function score_sumary($quiz_id) {
        $session_CourseId = session('course_id');

        $user_id = Auth::user()->id;

        $userLearning = UserLerning::where('elearning_id', $session_CourseId)
        ->where('user_id', $user_id)
        ->first();

        $questionCount = Question::where('quiz_id', $quiz_id)->count();
        $quiz = Quiz::find($quiz_id);
        return view('pages.app_quiz.score_sumary', compact('quiz',  'userLearning', 'questionCount'));
    }
    
}
