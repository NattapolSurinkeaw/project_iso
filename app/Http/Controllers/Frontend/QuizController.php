<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Elerningcourse;
use App\Models\UserLerning;

class QuizController extends Controller
{
    //
    public function quizStart($id_coruse, $quiz_id) {
        $course = Elerningcourse::find($id_coruse);
        $quiz = Quiz::find($quiz_id);
    
        $questionCount = Question::where('quiz_id', $quiz_id)->count();
        $totalScore = Question::where('quiz_id', $quiz_id)->sum('score');
    
        return view('pages.app_quiz.start_quiz', compact('course', 'quiz', 'questionCount', 'totalScore')); // เพิ่ม 'questions'
    }

    public function score_sumary($quiz_id) {
        // $sessionCourseId = session('course_id');

        $user_id = Auth::user()->id;

        $userLearning = UserLerning::where('quiz_id', $quiz_id)
        ->where('user_id', $user_id)
        ->first();

        $questionCount = Question::where('quiz_id', $quiz_id)->count();
        $quiz = Quiz::find($quiz_id);
        return view('pages.app_quiz.score_sumary', compact('quiz',  'userLearning', 'questionCount'));
    }
    
}
