@extends('layouts.main')
@section('title') QuizPage @endsection
@section('content')
{{-- @dd($quiz) --}}
  <div class="bg-gray-100 h-screen p-20 flex justify-center ">
    <div class="mx-auto p-10 bg-white w-[970px] border-2 flex flex-col justify-center items-center gap-10 rounded-xl bg-gray-100">
      <h1 class="text-center text-3xl font-medium">Star Quiz</h1>
      <h1 class="text-center">Course : {{$course->course_name}}</h1>
      <h1 class="text-center">Quiz Name : {{$quiz->quiz_name}}</h1>
      <h1 class="text-center">Quiz Type : {{$quiz->quiz_type}}</h1>
      <h1 class="text-center">Total Questions : {{$questionCount}}</h1>
      <h1 class="text-center">total Mark : {{$totalScore}}</h1>
      <h1 class="text-center">Duration : &nbsp; {{$quiz->timer}} min</h1>
      <h1 class="text-center text-3xl text-green-600 font-medium">Started!</h1>
      <button onclick="startQuiz()" id="btnaction" class="text-white font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Attempt now</button>
    </div>
    
  </div>
@endsection

@section('scripts')
<script>
  

  let questionCount = {!! json_encode($questionCount) !!};
  // console.log(questionCount);

  if(questionCount > 0) {
    document.querySelector('#btnaction').classList.add("bg-green-700", "hover:bg-green-500");
  } else {
    document.querySelector('#btnaction').classList.add("bg-green-200", "hover:bg-green-200");
  }
  function startQuiz() {
    if(questionCount > 0) {
      window.location.href = "/all_question/{{$quiz->id}}";
      document.querySelector('#btnaction').addClasslist("bg-green-700")
    } else {
      console.log("No Question")
    }
  }
</script>
@endsection