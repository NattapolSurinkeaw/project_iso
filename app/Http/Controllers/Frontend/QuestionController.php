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
    
        $quizes = Quiz::find($quiz_id);
        return view('pages.app_quiz.all_question', compact('questions', 'quizes'));
    }

    public function checkAnswers (Request $request, $quiz_id) {
        $useranswe = $request->toArray();
        $questions = Question::where('quiz_id', $quiz_id)->get();
        $quiz_scoreTotal = $questions->sum('score'); // คะแนนข้อสอบรวม

        $quiz = Quiz::find($quiz_id);

        // dd($quiz->quiz_type);exit();
        $user_id = Auth::user()->id;

        $totalScore = 0;  // คะแนน user ทำได้

        foreach ($useranswe as $userAnswer) {
            $matchingQuestion = $questions->firstWhere('id', $userAnswer['questionId']);
            
            if ($matchingQuestion && $matchingQuestion->answer === $userAnswer['choice']) {
                $totalScore += $matchingQuestion->score;
            }
        }
        
        $userLearning = UserLerning::where('quiz_id', $quiz_id)
        ->where('user_id', $user_id)
        ->first();

        
        if($quiz->quiz_type == 'posttest') {
            if (!$userLearning) {
                // If no record exists, create a new one
                $percentage = ($totalScore / $quiz_scoreTotal) * 100;
                $certificate = ($percentage > 70) ? "yes" : "no";
                $userLearning = UserLerning::create([
                    'quiz_id' => $quiz_id,
                    'user_id' => $user_id,
                    'score' => $totalScore,
                    'last_score' => $totalScore,
                    'total_score' => $questions->sum('score'),
                    'certificate' => $certificate,
                    'total_round' => 1,
                ]);
            } else {
                // If a record exists, update the existing one
                $userLearning->increment('total_round');
                if ($totalScore > $userLearning->score) {
                    $userLearning->score = $totalScore;
                }
                $userLearning->last_score = $totalScore;
                $userLearning->total_score = $questions->sum('score');

                $percentage = ($totalScore / $quiz_scoreTotal) * 100;
                $certificate = ($percentage > 70) ? "yes" : "no";
                $userLearning->certificate = $certificate;
                $userLearning->save();
            }

        } else {
            // dd($totalScore);exit();
            if (!$userLearning) {
                // If no record exists, create a new one
                $userLearning = UserLerning::create([
                    'quiz_id' => $quiz_id,
                    'user_id' => $user_id,
                    'last_score' => $totalScore,
                    'total_score' => $questions->sum('score'),
                    'total_round' => 1,
                ]);
            } else {
                // If a record exists, update the existing one
                $userLearning->increment('total_round');
                $userLearning->last_score = $totalScore;
                $userLearning->total_score = $questions->sum('score');
                $userLearning->save();
            }
        }
        return response()->json([
            'status' => 'success',
            'message' => 'data has been saved successfully',
        ], 200);
        
    }

}
