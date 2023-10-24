@extends('layouts.main')
@section('title') Score Sumary @endsection
@section('content') 
{{-- @dd($userLearning) --}}
  <div class="bg-gray-100 h-screen p-20 max-xs:p-5 flex justify-center ">
    <div class="mx-auto p-5 bg-white w-[970px] border-2 flex flex-col justify-center items-center gap-7 rounded-xl bg-gray-100">
      <h1 class="text-center text-3xl font-medium">สรุปคะแนน</h1>
      <h1 class="text-center">Total Questions : {{$questionCount}}</h1>
      <h1 class="text-center">คะแนนที่ได้ : {{$userLearning->last_score}} / {{$userLearning->total_score}}</h1>
      <div class="flex gap-2">
        <h1 class="text-center">คำนวณเปอร์เซ็นต์ : </h1>
        <h1 id="percenScore"></h1>
      </div>
      <h1 class="text-center">Quiz Name : {{$quiz->quiz_name}}</h1>
      <h1 class="text-center">Quiz Type : {{$quiz->quiz_type}}</h1>
      <h1 id="text-congrat" class="text-center text-3xl font-medium"></h1>
      <div class="flex max-xs:flex-col gap-10">
        <a href="/course/{{$quiz->elerningcourse_id}}" class="text-white text-center bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 ">back to course</a>
        <a href="/all_question/{{$quiz->id}}" class="text-white text-center bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 ">Try again</a>
        <button id="downloadCertificate" class="text-white text-center font-medium rounded-lg text-sm px-5 py-2.5 ">Download Certificate</button>
      </div>
    </div>
    
  </div>
@endsection
@section('scripts')
<script>
  const quiz = {!! $quiz!!}
  console.log(quiz);
  const userLearning = {!! $userLearning !!}
  const score = userLearning.last_score
  const totalScore = userLearning.total_score
  const percentage = Math.round((score / totalScore) * 100);
  percenScore.innerText = percentage + ' %';
  let btnCertificate = document.querySelector('#downloadCertificate')
  let textCongrat = document.querySelector('#text-congrat');
  if(quiz.quiz_type == 'pretest'){
    btnCertificate.classList.add('hidden');
  } 

  if (percentage > 70) {
      textCongrat.classList.add('text-green-600');
      btnCertificate.classList.add('bg-green-700', 'hover:bg-green-800');
      textCongrat.innerText = "Congratulations!"
    } else {
      textCongrat.classList.add('text-red-600');
      btnCertificate.classList.add('bg-gray-600', 'cursor-default');
      textCongrat.innerText = "Sorry you didn't pass."
    }
  
  btnCertificate.addEventListener('click', () => {
    if(percentage > 70  && userLearning.certificate == 'yes') {
      location.href = "/certificate";
    } else {
      console.log('your score not pass');
    }
  })
</script>
@endsection
