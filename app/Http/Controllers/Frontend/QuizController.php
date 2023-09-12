<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Elerningcourse;

class QuizController extends Controller
{
    //
    public function quizStart($id_coruse, $id_quiz) {
        $course = Elerningcourse::find($id_coruse);
        $quiz = Quiz::find($id_quiz);
    
        $questionCount = Question::where('quiz_id', $id_quiz)->count();
        $totalScore = Question::where('quiz_id', $id_quiz)->sum('score');
    
        return view('pages.app_quiz.start_quiz', compact('course', 'quiz', 'questionCount', 'totalScore')); // เพิ่ม 'questions'
    }

    public function score_sumary($quiz_id, $score) {
        $sessionCourseId = session('course_id');

        $opt_score = $score;
        $quiz = Quiz::find($quiz_id);
        $totalScore = Question::where('quiz_id', $quiz_id)->sum('score');
        // dd($totalScore);exit();
        return view('pages.app_quiz.score_sumary', compact('quiz', 'opt_score', 'totalScore'));
    }
    
}
