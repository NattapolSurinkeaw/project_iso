@extends('layouts.main')
@section('title') CoursePage @endsection
@section('content')
<div class="bg-gray-100 py-4 h-auto min-h-[896px]">
  <div class="w-11/12 mx-auto">
    <h1 class="text-3xl text-center">Course : {{$course->course_name}}</h1>
    <h1 class="text-3xl text-center">Teacher : {{$course->user_name}}</h1>

    <div class="bg-white border-l-8 border-l-indigo-500 rounded-xl p-4 m-10 max-md:m-5">
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

    <div class="bg-white border-l-8 border-l-yellow-500 rounded-xl p-4 m-10 max-md:m-5">
      <div class="animate__animated animate__bounce flex justify-between">
        <img class="h-8" src="/image/icon/material-icon.png" alt="">
        <h1 class="text-xl">Course Material</h1>
        <img class="h-8" src="/image/icon/material-icon.png" alt="">
      </div>
      <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
      @foreach($materials as $item)
      <div class="w-full relative pr-10">
        <p class="my-5">{{$item->description}}</p>
        <div class="h-0 overflow-hidden transition-all duration-300 ease-in-out" id="content-material">
          <a href="{{$item->document}}" target="_bank">ไฟล์ pdf</a>
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
            <div class="w-64 flex flex-col justify-center items-center p-2 border hover:shadow-lg hover:shadow-red-300 rounded-lg ">
                <img id="getVideo" video-id="{{$item->id}}" class="w-96 h-40 duration-300 rounded-lg"src="{{$item->thumbnail}}" data-type={{$item->type_input}}>
            </div>
            <!-- The Modal -->
            <div id="videoModal" class="modal hidden fixed inset-0 bg-black bg-opacity-70 flex justify-center items-center z-[11]">
              <div class="modal-content bg-white p-4 rounded-lg shadow-lg">
                <a id="close" class="flex absolute top-10 right-48 text-center text-4xl text-white hover:text-black cursor-pointer">X</a>
                <div id="box-video"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="absolute top-0 right-0 cursor-pointer flex items-center gap-2" id="action-material">
          <input type="checkbox" name="" id="check-video" data-id="{{$item->id}}" disabled>
          <box-icon type='solid' name='chevrons-right' class="" id="right"></box-icon>
          <box-icon name='chevrons-down' type='solid' class="hidden" id="bottom"></box-icon>
        </div>
      </div>
        <p class="text-gray-400">07-feb-23, 08.02 Am</p>
        <hr>
      @endforeach
    </div>

    <div class="bg-white border-l-8 border-l-red-500 rounded-xl p-4 m-10 max-md:m-5">
      <div class="animate__animated animate__bounce flex justify-between ">
        <img class="h-8" src="/image/icon/assignment.png" alt="">
        <h1 class="text-xl">Asssignment</h1>
        <img class="h-8" src="/image/icon/assignment.png" alt="">
      </div>
      <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

      @if(count($quizzes) > 0)
      @foreach($quizzes as $quiz)
      <p class="my-4 text-green-500 cursor-pointer" data-id="{{$quiz->id}}" id="startQuiz">{{$quiz->quiz_name}}</p>
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

        content_material[index].classList.remove('h-0');
        content_material[index].classList.add('h-[250px]');
        show = true; // เปลี่ยนเป็น true เมื่อคลิกเพื่อแสดงเนื้อหา
      } else {
        rightIcon.classList.remove('hidden');
        bottomIcon.classList.add('hidden');

        content_material[index].classList.remove('h-[250px]');
        content_material[index].classList.add('h-0');
        show = false; // เปลี่ยนเป็น false เมื่อคลิกเพื่อซ่อนเนื้อหา
      }
    });
  });

  // จับเวลา
  const btnVideo = document.querySelectorAll('#getVideo')

  btnVideo.forEach(btnVideo => {
    btnVideo.addEventListener('click', () => {
      const videoId = btnVideo.getAttribute('video-id');
      getVideo(videoId)
    });
  });

  let video_time = false;
  function getVideo(videoId) {
    let modal = document.getElementById('videoModal');
    let videoFrame = document.getElementById('box-video');

    try {
      axios.get(`/api/getvideomat/${videoId}`)
        .then(response => {
          const url = response.data.data;
          console.log(url);
          videoFrame.innerHTML = url;
        })
        .catch(error => {
          console.log(error);
        });
    } catch (error) {
      console.log(error);
    }

    // Show the modal
    modal.classList.remove('hidden');
    video_time = true;
    console.log(video_time);
    if(video_time = true) {
      startTimer(videoId); // เริ่มต้นจับเวลาเมื่อเอกสารโหลด
    }

    // Close the modal when the "close" button is clicked
    const closeButton = document.querySelector('#close');
    closeButton.addEventListener('click', function(event) {
      event.stopPropagation(); // หยุด event propagation
      videoFrame.innerHTML = ''; // Clear the iframe content
      modal.classList.add('hidden');
      video_time = false;
      console.log(video_time);
    });

    // Close the modal when clicking outside of it
    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        videoFrame.innerHTML = ''; // Clear the iframe content
        modal.classList.add('hidden');
        video_time = false;
        console.log(video_time)
      }
    });
  }


  function startTimer(videoId) {
    // ถ้ามีค่าใน localStorage ให้ใช้ค่านั้น
    // let timeLeft = 1 * 60;
    let timeLeft = 10;

    // สร้างตัวจับเวลาและอัปเดตค่าทุกวินาที
    let countdownInterval = setInterval(function() {
      let minutes = Math.floor(timeLeft / 60);
      let seconds = timeLeft % 60;
      // timer.innerText = `${minutes} . ${seconds}`;
      console.log(timeLeft);
      if (timeLeft <= 0) {
        clearInterval(countdownInterval); // หยุดจับเวลาเมื่อหมดเวลา
        learnvideo(videoId)
      } else if (video_time === false) {
        clearInterval(countdownInterval); // หยุดจับเวลาเมื่อ video_time เป็น false
      } else {
        timeLeft--;
      }
    }, 1000); // จับเวลาทุกวินาที (1000 มิลลิวินาที = 1 วินาที)
  }

  function learnvideo(videoId) {
    console.log(videoId);
    param = {
      "course_id" : {{$course->id}}
    }
    axios.post(`/api/learning-video/${videoId}`,param).then((response) => {
      console.log(response);
    })
  }

  let startQuiz = document.querySelectorAll("#startQuiz");
  startQuiz.forEach(element => {
    element.addEventListener('click', () => {
      let quiz_id = element.getAttribute("data-id")
      funStartQuiz(quiz_id)
    })
  });

  function funStartQuiz(quiz_id){
    axios.get(`/quizstart/${quiz_id}`).then((response) => {
      console.log(response);
      if(response.data.status == 'error') {
        console.log(response.data.message);
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: response.data.message,
          showConfirmButton: false
        })
        return false;
      } else {
        location.href = `/quizstart/${quiz_id}`
      }
    })
  }
</script>
@endsection