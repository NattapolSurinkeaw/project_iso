@extends('layouts.main')
@section('title') QuizPage @endsection
@section('content') 
{{-- @dd($quiz) --}}
  <div class="bg-gray-100 h-screen p-20 flex justify-center ">
    <div class="mx-auto p-10 bg-white w-[970px] border-2 flex flex-col justify-center items-center gap-10 rounded-xl bg-gray-100">
      <h1 class="text-center text-3xl font-medium">สรุปคะแนน</h1>
      <h1 class="text-center">Total Questions : 10</h1>
      <h1 class="text-center">คะแนนที่ได้ : {{$opt_score}} / {{$totalScore}}</h1>
      <div class="flex gap-2">
        <h1 class="text-center">คำนวณเปอร์เซ็นต์ : </h1>
        <h1 id="percenScore"></h1>
      </div>
      <h1 class="text-center">Quiz Name : {{$quiz->quiz_name}}</h1>
      <h1 class="text-center">Quiz Type : {{$quiz->quiz_type}}</h1>
      <h1 class="text-center">total Mark : 100</h1>
      <h1 id="text-congrat" class="text-center text-3xl font-medium"></h1>
      <div class="flex gap-10">
        <a href="/course/{{$quiz->elerningcourse_id}}" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">back to course</a>
        <a href="/all_question/{{$quiz->id}}" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Try again</a>
        <button id="downloadCertificate" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Download Certificate</button>
      </div>
    </div>
    
  </div>
@endsection
@section('scripts')
<script>
  const score = {{$opt_score}}
  const totalScore = {{$totalScore}}
  const percentage = Math.round((score / totalScore) * 100);
  percenScore.innerText = percentage + ' %';
  let btnCertificate = document.querySelector('#downloadCertificate')
  let textCongrat = document.querySelector('#text-congrat');
  if (percentage > 80) {
    textCongrat.classList.add('text-green-600');
    textCongrat.innerText = "Congratulations!"
  } else {
    textCongrat.classList.add('text-red-600');
    textCongrat.innerText = "Sorry you didn't pass."
  }
  
  btnCertificate.addEventListener('click', () => {
    console.log(percentage);
    if(percentage > 80) {
      console.log('get Certificates');
    } else {
      console.log('your score not pass');
    }
  })
</script>
@endsection
