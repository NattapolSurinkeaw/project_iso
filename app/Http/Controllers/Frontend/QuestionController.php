<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;

class QuestionController extends Controller
{
    //
    public function all_question($id) {
        $questions = Question::where('quiz_id', $id)->get();

        // หรือใช้ความสัมพันธ์ที่กำหนดไว้ใน Model
        $quiz = Quiz::find($id);
        $questions = $quiz->question;
        return view('pages.app_quiz.all_question', compact('questions','quiz'));
    }

}
