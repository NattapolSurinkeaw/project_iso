@extends('layouts.main')
@section('meta-description','ISOConsult elerning - Your Source for Quality Products')
@section('meta-keywords', 'ISOConsult,elerning,products,quality,online training')
@section('title', 'ISOConsult')
@section('detail', 'Elearning Course')
@section('content')
  <div class="bg-gray-200 w-full p-10 pt-20 flex justify-center"> 
    {{-- @dd($quizzes) --}}
    {{-- {{$quizzes}} --}}
    <div for="box-quiz" class="w-full flex flex-col items-center gap-10">
        <div class="fixed top-20 w-11/12 text-xl flex justify-end">
            timer : <span id="counting-time" class="ml-2 text-red-600"> {{$quizes->timer}}</span> 
        </div>
        @php
            $i = ($questions->currentPage() - 1) * $questions->perPage() + 1;
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

        <div class="bg-white px-4 py-3 flex items-center justify-between gap-2 border-t border-gray-200 sm:px-6 rounded-lg">
            <div class="flex-1 flex justify-between sm:hidden">
                @if ($questions->currentPage() > 1)
                    <a href="{{ $questions->previousPageUrl() }}"
                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Previous
                    </a>
                @endif
        
                @if ($questions->hasMorePages())
                    <a href="{{ $questions->nextPageUrl() }}"
                       class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Next
                    </a>
                @endif
            </div>
        
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                {{ $questions->links() }}
            </div>

            @if($questions->currentPage() === $questions->lastPage())
                <button data-quiz="{{$quizes->id}}" id="checkanswer" type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            @endif
        </div>
        
        {{-- <button id="btnSubmit" data-quiz="{{$quiz_id->id}}" class="p-2 px-4 bg-red-400 rounded-xl">ไม่ใช้</button> --}}
        {{-- <div class="w-full flex justify-between px-10 p-2 bg-gray-600 rounded-xl">
            <button class="p-2 px-4 bg-red-400 rounded-xl">Prev</button>
            <button onclick="calculateTotalScore()" class="p-2 px-4 bg-red-400 rounded-xl">ปุ่มเทสคำนวณ</button>
        </div> --}}
    </div>
  </div>

@endsection

@section('scripts')
<script>
    let quizes = {!! $quizes !!}
    console.log(quizes.id);
    let quiz_time = quizes.timer;
    let timer = document.querySelector('#counting-time');

    function startTimer() {
        // ตรวจสอบว่ามีค่า timeLeft ที่เก็บใน localStorage หรือไม่
        let storedTimeLeft = localStorage.getItem('timeLeft');
        
        // ถ้ามีค่าใน localStorage ให้ใช้ค่านั้น
        let timeLeft = storedTimeLeft ? parseInt(storedTimeLeft, 10) : quiz_time * 60;

        // สร้างตัวจับเวลาและอัปเดตค่าทุกวินาที
        let countdownInterval = setInterval(function() {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            timer.innerText = `${minutes} . ${seconds}`;

            if (timeLeft <= 0) {
                // ทำอะไรก็ตามที่คุณต้องการเมื่อหมดเวลา
                clearInterval(countdownInterval); // หยุดจับเวลาเมื่อหมดเวลา
                timer.innerText = "หมดเวลา!";
                checkQuestion(quizes.id)
            } else {
                timeLeft--;
                
                // บันทึกค่า timeLeft ใน localStorage เพื่อใช้ในครั้งถัดไป
                localStorage.setItem('timeLeft', timeLeft.toString());
            }
        }, 1000); // จับเวลาทุกวินาที (1000 มิลลิวินาที = 1 วินาที)
    }

    startTimer(); // เริ่มต้นจับเวลาเมื่อเอกสารโหลด

    let userAnswers = JSON.parse(localStorage.getItem('userAnswers')) || [];

    // เพิ่มการตรวจจับเหตุการณ์เมื่อมีการเลือก radio input
    document.addEventListener("DOMContentLoaded", function() {
    let radioInputs = document.querySelectorAll("input[type=radio]");

        radioInputs.forEach(function(radio) {
            radio.addEventListener("change", function(event) {
                let questionId = radio.getAttribute("name");
                let labelElement = radio.parentElement.querySelector("label"); // ค้นหา label ใน parent element
                let selectedChoice = labelElement.getAttribute("name");
                updateUserAnswer(questionId, selectedChoice);
            });
        });
    });

    function updateUserAnswer(questionId, choice) {
        // ค้นหาว่าคำถามมีการเก็บคำตอบจากผู้ใช้แล้วหรือยัง
        let existingAnswerIndex = userAnswers.findIndex(function(answer) {
            return answer.questionId === questionId;
        });

        // ถ้าคำถามมีการเก็บคำตอบแล้วให้อัพเดตคำตอบ
        if (existingAnswerIndex !== -1) {
            userAnswers[existingAnswerIndex].choice = choice;
        } else {
            // ถ้ายังไม่มีการเก็บคำตอบให้เพิ่มข้อมูลใหม่เข้าไป
            userAnswers.push({ questionId: questionId, choice: choice });
        }

        localStorage.setItem('userAnswers', JSON.stringify(userAnswers));
        console.log(userAnswers);
        
    }

    let btncheckanswer = document.querySelector('#checkanswer');
    btncheckanswer.addEventListener('click', () => {
        const quiz_id = btncheckanswer.getAttribute('data-quiz');
        checkQuestion(quiz_id)
    })

    function checkQuestion(quiz_id){
        // console.log(quiz_id)
        const storedUserAnswers = localStorage.getItem('userAnswers');
        let dataanswer;
        if (storedUserAnswers) {
            dataanswer = JSON.parse(storedUserAnswers);
        }
        console.log(dataanswer);
        localStorage.removeItem("timeLeft") // เคลียร์ค่าเวลาก่อนส่งข้อมูล
        axios.post(`/api/checkanswer/${quiz_id}`, dataanswer).then((response) => {
            console.log(response);
            if(response.data.status === 'success') {
                localStorage.removeItem('userAnswers');
                location.href = `/scoresumary/${quiz_id}`
            }
        })
    }

    
</script>

@endsection

