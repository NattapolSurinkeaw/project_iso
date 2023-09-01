@extends('backend.layouts.main')
@section('title') Coursedetail @endsection
@section('container')

<div class="mx-10 my-4 h-screen">
    <div class="h-4/5 overflow-y-scroll">
      <h1 class="w-full text-xl font-bold text-center">Detail Course : {{$course->course_name}}</h1>
      <div class="bg-white border-l-8 border-l-indigo-500 rounded-xl p-4 m-10">
          <div class="animate__animated animate__bounce flex justify-between ">
            <img class="h-8" src="https://nattapolsu.pythonanywhere.com/static/images/icon/megaphone.png" alt="">
            <h1 class="text-xl">Anoucement</h1>
            <img class="h-8" src="https://nattapolsu.pythonanywhere.com/static/images/icon/megaphone.png" alt="">
          </div>
          <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
          
          <p class="my-4">fdfdfs</p>

            <p>date</p>
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
    
          <p class="my-4 text-green-500 cursor-pointer">dd</p>

          <p>07-feb-23, 08.02 Am</p>
          <hr>
        </div>
      </div>
    </div>
</div>

@endsection

@section('be-scripts')
<script>
   
</script>

@endsection