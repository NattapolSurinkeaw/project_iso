<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;

class QuestionController extends Controller
{
    //
    public function all_question($quiz_id) {
        $questions = Question::where('quiz_id', $quiz_id)->inRandomOrder()->paginate(5);
    
        $quiz_id = Quiz::select('id')->find($quiz_id);
        return view('pages.app_quiz.all_question', compact('questions', 'quiz_id'));
    }

    public function checkAnswers (Request $request, $quiz_id) {
        $useranswe = $request->input('dataanswer');
        $questions = Question::where('quiz_id', $quiz_id)->get();
        dd($useranswe);exit();
    }

}
