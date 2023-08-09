@extends('layouts.main')
@section('title') QuizPage @endsection
@section('content')
  <div class="bg-gray-100 h-screen p-20 flex justify-center ">
    <div class="mx-auto p-10 bg-white w-[970px] border-2 flex flex-col justify-center items-center gap-10 rounded-xl bg-gray-100">
      <h1 class="text-center text-3xl font-medium">Star Quiz</h1>
      <h1 class="text-center">Course : {{$course->course_name}}</h1>
      <h1 class="text-center">Pre-test</h1>
      <h1 class="text-center">Total Questions : 10</h1>
      <h1 class="text-center">total Mark : 100</h1>
      <h1 class="text-center">Duration : 30 min</h1>
      <h1 class="text-center text-3xl text-green-600 font-medium">Started!</h1>
      <a href="/allquiz/{{$course->id}}" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Attempt now</a>
    </div>
    
  </div>
@endsection