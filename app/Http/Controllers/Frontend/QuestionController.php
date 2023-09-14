<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\UserLerning;

class QuestionController extends Controller
{
    //
    public function all_question($quiz_id) {
        $questions = Question::where('quiz_id', $quiz_id)->paginate(5);
        // $questions = Question::where('quiz_id', $quiz_id)->inRandomOrder()->paginate(5);
    
        $quiz_id = Quiz::select('id')->find($quiz_id);
        return view('pages.app_quiz.all_question', compact('questions', 'quiz_id'));
    }

    public function checkAnswers (Request $request, $quiz_id) {
        $useranswe = $request->toArray();
        $questions = Question::where('quiz_id', $quiz_id)->get();

        $user_id = Auth::user()->id;
        
        // dd($user);exit();

        $totalScore = 0;

        foreach ($useranswe as $userAnswer) {
            $matchingQuestion = $questions->firstWhere('id', $userAnswer['questionId']);
            
            if ($matchingQuestion && $matchingQuestion->answer === $userAnswer['choice']) {
                $totalScore += $matchingQuestion->score;
            }
        }

        $userLearning = UserLerning::where('quiz_id', $quiz_id)
        ->where('user_id', $user_id)
        ->first();

        if (!$userLearning) {
            // If no record exists, create a new one
            $userLearning = UserLerning::create([
                'quiz_id' => $quiz_id,
                'user_id' => $user_id,
                'score' => $totalScore,
                'total_score' => $questions->sum('score'),
                'total_round' => 1,
            ]);
        } else {
            // If a record exists, update the existing one
            $userLearning->increment('total_round');
            $userLearning->score = $totalScore;
            $userLearning->total_score = $questions->sum('score');
            $userLearning->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'data has been saved successfully',
            'score' => $totalScore
        ], 200);

    }

}
