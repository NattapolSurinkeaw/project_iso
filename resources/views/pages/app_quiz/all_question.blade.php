@extends('layouts.main')
@section('title') QuizPage @endsection
@section('content')
  <div class="bg-gray-200 w-full p-10 pt-20 flex justify-center"> 
    {{-- @dd($quizzes) --}}
    {{-- {{$quizzes}} --}}
    <div for="box-quiz" class="w-full flex flex-col items-center gap-10">
        <div class="text-xl w-full flex justify-end">
            timer : <span id="counting-time" class="ml-2"> 0.0</span> 
        </div>
        @php
            $i = 1;
        @endphp
        @foreach($questions as $question)
            <div class="w-3/4 bg-white rounded-xl p-9">
                <div class="flex gap-4">
                    <label for="question" data-id="{{$question->id}}">ข้อที่ {{$i++}}</label>
                    <div for="question">{!!$question->question !!}</div>
                </div>
                <hr class="border-2 border-[#B6B2B2]">
                <div class="p-4 flex flex-col gap-4 ">
                    <div class="flex gap-3 text-gray-400 hover:text-black">
                        <input type="radio" name="{{$question->id}}">
                        <label for="choice1" name="choice1">{{$question->choice1}}</label>
                    </div>
                    <div class="flex gap-3 text-gray-400 hover:text-black">
                        <input type="radio" name="{{$question->id}}">
                        <label for="choice2" name="choice2">{{$question->choice2}}</label>
                    </div>
                    <div class="flex gap-3 text-gray-400 hover:text-black">
                        <input type="radio" name="{{$question->id}}">
                        <label for="choice3" name="choice3">{{$question->choice3}}</label>
                    </div>
                    <div class="flex gap-3 text-gray-400 hover:text-black">
                        <input type="radio" name="{{$question->id}}">
                        <label for="choice4" name="choice4">{{$question->choice4}}</label>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="w-full flex justify-between px-10 p-2 bg-gray-600 rounded-xl">
            <button class="p-2 px-4 bg-red-400 rounded-xl">Prev</button>
            <button id="btnSubmit" data-quiz="{{$quiz_id->id}}" class="p-2 px-4 bg-red-400 rounded-xl">submit</button>
            <button onclick="calculateTotalScore()" class="p-2 px-4 bg-red-400 rounded-xl">ปุ่มเทสคำนวณ</button>
        </div>
    </div>
  </div>

@endsection

@section('scripts')
<script>
    let timer = document.querySelector('#counting-time').innerText;

    let dataAllQues = {!! json_encode($questions) !!};
    console.log(dataAllQues)

    // สร้างอาร์เรย์เพื่อเก็บคำถามและคำตอบที่ผู้ใช้เลือก
    var userAnswers = [];

    // เพิ่มการตรวจจับเหตุการณ์เมื่อมีการเลือก radio input
    document.addEventListener("DOMContentLoaded", function() {
    var radioInputs = document.querySelectorAll("input[type=radio]");

        radioInputs.forEach(function(radio) {
            radio.addEventListener("change", function(event) {
                var questionId = radio.getAttribute("name");
                var labelElement = radio.parentElement.querySelector("label"); // ค้นหา label ใน parent element
                var selectedChoice = labelElement.getAttribute("name");
                updateUserAnswer(questionId, selectedChoice);
            });
        });
    });

    function updateUserAnswer(questionId, choice) {
        // ค้นหาว่าคำถามมีการเก็บคำตอบจากผู้ใช้แล้วหรือยัง
        var existingAnswerIndex = userAnswers.findIndex(function(answer) {
            return answer.questionId === questionId;
        });

        // ถ้าคำถามมีการเก็บคำตอบแล้วให้อัพเดตคำตอบ
        if (existingAnswerIndex !== -1) {
            userAnswers[existingAnswerIndex].choice = choice;
        } else {
            // ถ้ายังไม่มีการเก็บคำตอบให้เพิ่มข้อมูลใหม่เข้าไป
            userAnswers.push({ questionId: questionId, choice: choice });
        }

        // console.log(userAnswers);
    }

    let btnSubmit = document.querySelector('#btnSubmit');
    btnSubmit.addEventListener('click', () => {
        const quiz_id = btnSubmit.getAttribute('data-quiz');
        submit(quiz_id)
    })
    
    function submit(quiz_id) {
        let submitscore = calculateTotalScore()
        console.log(quiz_id);
        console.log("Total Score: " + submitscore);
        location.href = `/scoresumary/${quiz_id}/${submitscore}`
    }

    function calculateTotalScore() {
        let totalScore = 0;
        userAnswers.forEach(function(userAnswer) {
            var matchingQuestion = dataAllQues.find(function(question) {
                return question.id == userAnswer.questionId;
            });

            console.log(matchingQuestion);
            
            if (matchingQuestion && matchingQuestion.answer === userAnswer.choice) {
                totalScore += matchingQuestion.score;
            }
        });
        
        return totalScore;
    }

    
</script>

@endsection

