@extends('layouts.main')
@section('title') QuizPage @endsection
@section('content')
  <div class="bg-gray-200 w-full p-10 pt-20 flex justify-center"> @dd($quizzes)
    <div for="box-quiz" class="w-full flex flex-col items-center gap-10">
        <div class="text-xl w-full flex justify-end">
            timer : <span id="counting-time" class="ml-2"> 0.0</span> 
        </div>
        <div class="w-3/4 bg-white rounded-xl p-9">
            <label for="">ข้อที่ 1</label>
            <hr class="border-2 border-[#B6B2B2]">
            <div class="p-4 flex flex-col gap-4 ">
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich1">A</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich2">B</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich3">C</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich4">D</label>
                </div>
            </div>
        </div>
        <div class="w-3/4 bg-white rounded-xl p-9">
            <label for="">ข้อที่ 2</label>
            <hr class="border-2 border-[#B6B2B2]">
            <div class="p-4 flex flex-col gap-4 ">
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich1">A</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich2">B</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich3">C</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich4">D</label>
                </div>
            </div>
        </div><div class="w-3/4 bg-white rounded-xl p-9">
            <label for="">ข้อที่ 3</label>
            <hr class="border-2 border-[#B6B2B2]">
            <div class="p-4 flex flex-col gap-4 ">
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich1">A</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich2">B</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich3">C</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich4">D</label>
                </div>
            </div>
        </div><div class="w-3/4 bg-white rounded-xl p-9">
            <label for="">ข้อที่ 4</label>
            <hr class="border-2 border-[#B6B2B2]">
            <div class="p-4 flex flex-col gap-4 ">
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich1">A</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich2">B</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich3">C</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich4">D</label>
                </div>
            </div>
        </div><div class="w-3/4 bg-white rounded-xl p-9">
            <label for="">ข้อที่ 5</label>
            <hr class="border-2 border-[#B6B2B2]">
            <div class="p-4 flex flex-col gap-4 ">
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich1">A</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich2">B</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich3">C</label>
                </div>
                <div class="flex gap-3 text-gray-400 hover:text-black">
                    <input type="radio" name="question1">
                    <label for="choich4">D</label>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-between px-10 p-2 bg-gray-600 rounded-xl">
            <button class="p-2 px-4 bg-red-400 rounded-xl">Prev</button>
            <a href="scoresumary" id="btn-next" class="p-2 px-4 bg-green-400 rounded-xl">Next</a>
        </div>
    </div>
  </div>

@endsection

@section('scripts')
<script>
    let timer = document.querySelector('#counting-time').innerText;
    console.log(timer)
</script>

@endsection

