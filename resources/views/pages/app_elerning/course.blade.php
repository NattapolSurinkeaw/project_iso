@extends('layouts.main')
@section('title') CoursePage @endsection
@section('content')
<div class="bg-gray-100 py-20">
  <div class="w-11/12 mx-auto">
    <h1 class="text-3xl text-center">Course : {{$course->course_name}}</h1>
    <h1 class="text-3xl text-center">Teacher : {{$course->user_name}}</h1>

    <div class="bg-white border-l-8 border-l-indigo-500 rounded-xl p-4 m-10">
      <div class="animate__animated animate__bounce flex justify-between ">
        <img class="h-8" src="/image/icon/annouce.png" alt="">
        <h1 class="text-xl">Anoucement</h1>
        <img class="h-8" src="/image/icon/annouce.png" alt="">
      </div>
      <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
      @if(count($announcements) > 0)
        @foreach($announcements as $announcement)
        <p class="my-4">{!! $announcement->content !!}</p>
        @if ($announcement && $announcement->updated_at)
          <p class="text-gray-400">{{$announcement->updated_at->format('d-M-Y')}}</p>
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
      <div class="animate__animated animate__bounce flex justify-between">
        <img class="h-8" src="/image/icon/material-icon.png" alt="">
        <h1 class="text-xl">Course Material</h1>
        <img class="h-8" src="/image/icon/material-icon.png" alt="">
      </div>
      <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

      @foreach($materials as $item)
      <div class="w-full relative">
        <p class="my-5">{{$item->description}}</p>
        <div class="hidden" id="content-material">
          <a href="{{$item->document}}">ไฟล์ pdf</a>
          <div>
            @php
              $course_video ="";
              if($item->input_type == 'youtube' || $item->input_type == 'vimeo'){
                $embed = \Embed::make($item->video_url)->parseUrl();
                $course_video = $embed->getHtml();
              } else if ($item->input_type == 'drive') {
                  $course_video = '<iframe src="' . $item->video_url . '" width="600px" height="300" allow="autoplay"></iframe>';
              } else {
                  $course_video = "ไม่มีวิดีโอ";
              }
            @endphp
            {!!$course_video !!}
          </div>
        </div>
        <div class="absolute top-0 right-0 cursor-pointer" id="action-material">
          <box-icon type='solid' name='chevrons-right' class="" id="right"></box-icon>
          <box-icon name='chevrons-down' type='solid' class="hidden" id="bottom"></box-icon>
        </div>
      </div>

        {{-- <div>
          @php 
          $embed1 = \Embed::make('https://youtu.be/2GbLTYmFB6s')->parseUrl();
          @endphp
          <div>
            {!!$embed1->getHtml() !!}
          </div> --}}

          {{-- <div class="">
            @php
              if ($embed1) {
                // Display the embed HTML in a div
                echo "<div class='video'>" . $embed1->getHtml() . "</div>";
            } else {
                // If provider is not found
                echo "Video not found.";
            }
            @endphp
          </div> --}}
        {{-- <div>
        <iframe src="https://drive.google.com/file/d/1kJiC7agiB23YQtIbVEhHW4eew-hcGCL9/preview" width="300" height="300" allow="autoplay"></iframe>
        </div>
        <div>
            <iframe src="https://drive.google.com/file/d/1_GcCKEaFWJXwoDA3gmTVM4dkvefsI67B/preview" width="300" height="300" allow="autoplay"></iframe>
        </div>
        </div> --}}

        <p class="text-gray-400">07-feb-23, 08.02 Am</p>
        <hr>
      @endforeach
    </div>

    <div class="bg-white border-l-8 border-l-red-500 rounded-xl p-4 m-10">
      <div class="animate__animated animate__bounce flex justify-between ">
        <img class="h-8" src="/image/icon/assignment.png" alt="">
        <h1 class="text-xl">Asssignment</h1>
        <img class="h-8" src="/image/icon/assignment.png" alt="">
      </div>
      <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

      @if(count($quizzes) > 0)
      @foreach($quizzes as $quiz)
      <p class="my-4 text-green-500 cursor-pointer"><a href="/quizstart/{{$course->id}}/{{$quiz->id}}" data-type="{{$quiz->quiz_type}}">{{$quiz->quiz_name}}</a></p>
      <p class="text-gray-400">{{$quiz->updated_at->format('d-M-Y')}}</p>
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

@section('scripts')
<script>
  const action_material = document.querySelectorAll('#action-material');
  const content_material = document.querySelectorAll('#content-material');
  // let show = false; // เริ่มต้นเป็น false

  action_material.forEach((element, index) => {
    let show = false; // เริ่มต้นเป็น false
    let rightIcon = element.querySelector('#right');
    let bottomIcon = element.querySelector('#bottom');

    element.addEventListener('click', function () {
      if (show === false) {
        rightIcon.classList.add('hidden');
        bottomIcon.classList.remove('hidden');
        content_material[index].classList.remove('hidden');
        show = true; // เปลี่ยนเป็น true เมื่อคลิกเพื่อแสดงเนื้อหา
      } else {
        rightIcon.classList.remove('hidden');
        bottomIcon.classList.add('hidden');
        content_material[index].classList.add('hidden');
        show = false; // เปลี่ยนเป็น false เมื่อคลิกเพื่อซ่อนเนื้อหา
      }
    });
  });
</script>
@endsection