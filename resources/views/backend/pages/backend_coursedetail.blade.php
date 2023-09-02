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
            <button onclick="addAnnouce()">เพิ่ม</button>
          </div>
          <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
          @if(count($announcements) > 0)
          @foreach($announcements as $announcement)
          <p class="my-4">{{$announcement->content}}</p>
          <p>{{$announcement->updated_at}}</p>
          <hr>
          @endforeach
          @else
          <p class="my-4">no announcement</p>
          <p>null</p>
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
            <button onclick="addQuiz()">เพิ่ม</button>
          </div>
          <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
          @if(count($quizzes) > 0)
          @foreach($quizzes as $quiz)
          <p class="my-4 text-green-500 cursor-pointer">{{$quiz->quiz_name}}</p>
          <p>{{$quiz->update_at}}</p>
          <hr>
          @endforeach
          @else
          <p class="my-4">no announcement</p>
          <p>null</p>
          @endif
        </div>

      </div>
    </div>
</div>

@endsection

@section('be-scripts')
<script>

  let courseId = {!! json_encode($course->id) !!}

  function addAnnouce() {
    console.log('addAnnouce')
    Swal.fire({
        title: "Edit",
        html: ` <input type="textarea" id="content-annouce" class="swal2-input" placeholder="Name" value="">`,
        confirmButtonText: "Submit",
        focusConfirm: false,
        preConfirm: () => {
            const content = Swal.getPopup().querySelector("#content-annouce").value;

            if (!content) {
                Swal.showValidationMessage(`Please enter your data.`);
                return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
            }

            param = {
              content : content,
              courseId: courseId
            }

            return param;
        },
    }).then((result) => {
        if (result.isConfirmed) {
            const content = result.value;
            console.log(content);
            axios.post('/api/backend/createannouce', content)
            .then((response) => {
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              }).then( () => {
                location.reload()
              });
            })
            .catch((error) => {
                console.error('API Error:', error);
                // จัดการข้อผิดพลาด
            });
        }
    });
}


  function addQuiz() {
  console.log('addQuiz');
  }
</script>
@endsection