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
      @if(count($announcements) > 0)
        @foreach($announcements as $announcement)
        <p class="my-4">{!! $announcement->content !!}</p>
        @if ($announcement && $announcement->updated_at)
          <p>{{$announcement->updated_at->format('d-M-Y')}}</p>
        @else
          <p>date</p>
        @endif
        <hr>
        @endforeach
      @else 
      <p class="my-4">null</p>
      <p>null</p>
      <hr>
      @endif
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
          <source src="" type="video/mp4">
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

      @if(count($quizzes) > 0)
      @foreach($quizzes as $quiz)
      <p class="my-4 text-green-500 cursor-pointer"><a href="/quizstart/{{$course->id}}/{{$quiz->id}}" data-type="{{$quiz->quiz_type}}">{{$quiz->quiz_name}}</a></p>
      <p>{{$quiz->updated_at->format('d-M-Y')}}</p>
      <hr>
      @endforeach
      @else
      <p class="my-4 text-gray-400">No quiz</p>
      <p>null</p>
      <hr>
      @endif
    </div>
  </div>
</div>
@endsection