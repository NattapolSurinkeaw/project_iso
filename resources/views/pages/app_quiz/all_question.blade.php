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
        @foreach($questions as $question)
            <div class="w-3/4 bg-white rounded-xl p-9">
                <label for="" data-id="{{$question->id}}">ข้อที่ {{$question->id}} {{$question->question}}</label>
                <hr class="border-2 border-[#B6B2B2]">
                <div class="p-4 flex flex-col gap-4 ">
                    <div class="flex gap-3 text-gray-400 hover:text-black">
                        <input type="radio" name="{{$question->id}}">
                        <label for="choich1" name="choich1">{{$question->choice1}}</label>
                    </div>
                    <div class="flex gap-3 text-gray-400 hover:text-black">
                        <input type="radio" name="{{$question->id}}">
                        <label for="choich2" name="choich2">{{$question->choice2}}</label>
                    </div>
                    <div class="flex gap-3 text-gray-400 hover:text-black">
                        <input type="radio" name="{{$question->id}}">
                        <label for="choich3" name="choich3">{{$question->choice3}}</label>
                    </div>
                    <div class="flex gap-3 text-gray-400 hover:text-black">
                        <input type="radio" name="{{$question->id}}">
                        <label for="choich4" name="choich4">{{$question->choice4}}</label>
                    </div>
                </div>
            </div>
        @endforeach
       {{-- @dd($quiz) --}}
        <div class="w-full flex justify-between px-10 p-2 bg-gray-600 rounded-xl">
            <button class="p-2 px-4 bg-red-400 rounded-xl">Prev</button>
            <a href="/scoresumary/{{$quiz->id}}" id="btn-next" class="p-2 px-4 bg-green-400 rounded-xl">Next</a>
        </div>
    </div>
  </div>

@endsection
{{-- @dd($questions) --}}
@section('scripts')
<script>
    let timer = document.querySelector('#counting-time').innerText;
    console.log(timer)

    let data = {!! json_encode($questions) !!};
    console.log(data)



    // สร้างอาร์เรย์เพื่อเก็บคำถามและคำตอบที่ผู้ใช้เลือก
    var userAnswers = [];

    // เพิ่มการตรวจจับเหตุการณ์เมื่อมีการเลือก radio input
    document.addEventListener("DOMContentLoaded", function() {
        var radioInputs = document.querySelectorAll("input[type=radio]");

        radioInputs.forEach(function(radio) {
            radio.addEventListener("change", function(event) {
                var questionId = questionLabel.getAttribute("data-id");
                var selectedChoice = radio.getAttribute("name");
                updateUserAnswer(questionId, selectedChoice);
            });
        });
    });

    // ฟังก์ชันสำหรับอัพเดตข้อมูลการเลือกของผู้ใช้ในอาร์เรย์
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

        console.log(userAnswers); // แสดงผลข้อมูลที่ผู้ใช้เลือกในคอนโซล
    }

</script>

@endsection

