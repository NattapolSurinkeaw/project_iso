<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\UserLerning;

class QuestionController extends Controller
{
    //
    public function all_question($quiz_id) {
        $questions = Question::where('quiz_id', $quiz_id)->inRandomOrder()->paginate(5);
    
        $quiz_id = Quiz::select('id')->find($quiz_id);
        return view('pages.app_quiz.all_question', compact('questions', 'quiz_id'));
    }

    public function checkAnswers (Request $request, $quiz_id) {
        $useranswe = $request->toArray();
        $questions = Question::where('quiz_id', $quiz_id)->get();

        $totalScore = 0;

        foreach ($useranswe as $userAnswer) {
            $matchingQuestion = $questions->firstWhere('id', $userAnswer['questionId']);
            
            if ($matchingQuestion && $matchingQuestion->answer === $userAnswer['choice']) {
                $totalScore += $matchingQuestion->score;
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'data has been saved successfully',
            'score' => $totalScore
        ], 200);

        dd($totalScore);exit();
    }

}
