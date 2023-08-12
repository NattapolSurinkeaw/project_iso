@extends('layouts.main')
@section('title') CoursePage @endsection
@section('content')
<div class="bg-gray-100 py-20">
  <div class="w-11/12 mx-auto">
    <h1 class="text-3xl text-center">Course : {{$course->course_name}}</h1>
    <h1 class="text-3xl text-center">Teacher : {{$course->user_name}}</h1>

    <div class="bg-white border-l-8 border-l-indigo-500 rounded-xl p-4 m-10">
      <div class="animate__animated animate__bounce flex justify-between ">
        <img class="h-8" src="https://nattapolsu.pythonanywhere.com/static/images/icon/megaphone.png" alt="">
        <h1 class="text-xl">Anoucement</h1>
        <img class="h-8" src="https://nattapolsu.pythonanywhere.com/static/images/icon/megaphone.png" alt="">
      </div>
      <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

      <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam optio maxime libero incidunt voluptates doloribus consectetur? Nemo adipisci maiores eos, eum, quas, laborum consequuntur iste minima suscipit corrupti dolor voluptas!</p>
      <p>07-feb-23, 08.02 Am</p>
      <hr>
      <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam optio maxime libero incidunt voluptates doloribus consectetur? Nemo adipisci maiores eos, eum, quas, laborum consequuntur...</p>
      <p>07-feb-30, 09.10 Am</p>
      <hr>
    </div>

    <div class="bg-white border-l-8 border-l-yellow-500 rounded-xl p-4 m-10">
      <div class="animate__animated animate__bounce flex justify-between ">
        <img class="h-8" src="https://nattapolsu.pythonanywhere.com/static/images/icon/megaphone.png" alt="">
        <h1 class="text-xl">Course Material</h1>
        <img class="h-8" src="https://nattapolsu.pythonanywhere.com/static/images/icon/megaphone.png" alt="">
      </div>
      <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

      <p class="my-5">ไฟล์สำหรับทำความเข้าใจควบคู่กับการเกี่ยวกับมาตรฐาน iso</p>
      <p class="my-4 text-blue-400 cursor-pointer">ไฟล์ iso.pdf</p>
      <p>07-feb-23, 08.02 Am</p>
      <hr >
      <p class="my-5">ไฟล์สำหรับทำความเข้าใจควบคู่กับการเกี่ยวกับมาตรฐาน iso</p>
      <p class="my-4 text-blue-400 cursor-pointer">
        <video class="w-96" controls>
          <source src="https://drive.google.com/file/d/1kJiC7agiB23YQtIbVEhHW4eew-hcGCL9/preview" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </p>
      <p>07-feb-23, 08.02 Am</p>
      <hr>
    </div>

    <div class="bg-white border-l-8 border-l-red-500 rounded-xl p-4 m-10">
      <div class="animate__animated animate__bounce flex justify-between ">
        <img class="h-8" src="https://nattapolsu.pythonanywhere.com/static/images/icon/megaphone.png" alt="">
        <h1 class="text-xl">Asssignment</h1>
        <img class="h-8" src="https://nattapolsu.pythonanywhere.com/static/images/icon/megaphone.png" alt="">
      </div>
      <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

      @foreach($quizzes as $quiz)
      <p class="my-4 text-green-500 cursor-pointer"><a href="/quizstart/{{$course->id}}/{{$quiz->id}}" data-type="{{$quiz->quiz_type}}">{{$quiz->quiz_name}}</a></p>
      @endforeach
      <p>07-feb-23, 08.02 Am</p>
      <hr>
    </div>
  </div>
</div>
@endsection