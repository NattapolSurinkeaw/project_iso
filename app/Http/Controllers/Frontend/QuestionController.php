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
        $questions = Question::where('quiz_id', $quiz_id)->get();

        // หรือใช้ความสัมพันธ์ที่กำหนดไว้ใน Model
        $quiz_id = Quiz::select('id')->find($quiz_id);
        return view('pages.app_quiz.all_question', compact('questions','quiz_id'));
    }

}
