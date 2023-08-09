<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Elerningcourse;

class QuizController extends Controller
{
    //
    public function quizPage($id) {
        $course = Elerningcourse::find($id);
    return view('pages.app_quiz.start_quiz', compact('course'));
    }

    public function all_quiz($id) {
        $quizzes = Quiz::find($id);
        return view('pages.app_quiz.all_quiz', compact('quizzes'));
    }

    public function score_sumary() {
        return view('pages.app_quiz.score_sumary');
    }
    
}
