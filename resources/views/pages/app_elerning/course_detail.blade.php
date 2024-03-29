@extends('layouts.main')
@section('meta-description',$course->description)
@section('meta-keywords', $course->course_name)
@section('title', $course->course_name)

@section('content')
<div>
  <div class="bg-gradient-to-r from-[#00ADEF] to-[#4338ca] flex max-lg:flex-col">
    <div class="w-full flex flex-col items-center justify-center p-4">
      <h1 class="text-3xl text-white">Course : {{$course->course_name}}</h1>
      {{-- <h1 class="text-3xl text-white">description : {{$course->description}}</h1> --}}
    </div>
    <div class="w-full max-lg:order-first transform">
      <img class="w-full h-80 transform rounded-l-3xl" src="{{$course->img_course}}" alt="">
    </div>
  </div>

  <div class="w-11/12 mx-auto my-5 flex flex-col gap-4">
    <div class="flex gap-10 max-md:flex-col">
      <div class="w-full flex flex-col gap-4">
        <div class="bg-gray-200 p-4 rounded-lg">
          <h1 class="text-3xl text-center mb-4">รายละเอียด</h1>
          <h1 class="text-2xl text-center">{{$course->description}}</h1>
          <div class="flex gap-4" id="box">
            {{-- <h1 class="text-xl w-20 max-md:w-40 max-sm:w-32">detail : </h1> --}}
            <h1 class="text-xl break-all">{!! $course->details !!}</h1>
          </div>
        </div>
    
        <div class="bg-gray-200 p-4 rounded-lg">
          <h1 class="text-3xl text-center mb-4">เนื้อหาหลักสูตร</h1>
          <h1 class="text-xl">วิดีโอ : 3 วิดีโอ</h1>
          <h1 class="text-xl">เอกสาร : 3 เอกสาร</h1>
          <p>แบบทดสอบ</p>
          <h1 class="text-xl">pretest : 10 ข้อ</h1>
          <h1 class="text-xl">posttest : 20 ข้อ</h1>
        </div>
      </div>

      <div class="w-full p-4 max-w-[400px] h-[200px] sticky top-[80px] bg-gray-300 rounded-lg">
        <h1 class="text-xl">ราคา</h1>
        <h1 class="text-xl">Price : {{ number_format($course->price) }}</h1>
        <hr class="border border-2 my-2">
       
        <div class="px-2 flex flex-col gap-3">
          @if($user)
            @if($mycourse)
            <a href="{{ url('/course/' .$course->id ) }}" class="w-full bg-green-500 p-1 rounded-lg text-white text-center">เริ่มเรียน</a>
            @else
            <button id="btnAddCart" class="w-full bg-blue-600 p-1 rounded-lg text-white text-center">เพิ่มใส่ตะกร้า</button>
            <button id="btnBuyNow" class="w-full bg-red-600 p-1 rounded-lg text-white text-center">สั่งซื้อทันที</button>
            @endif
          @else
            <a href="{{url('/login')}}" class="w-full bg-blue-600 p-1 rounded-lg text-white text-center">เพิ่มใส่ตะกร้า</a>
            <a href="{{url('/login')}}" class="w-full bg-red-600 p-1 rounded-lg text-white text-center">สั่งซื้อทันที</a>
          @endif
        </div>
      </div>
    </div>
    <a class="w-20 py-1 text-center bg-red-500 text-white rounded-lg" href="{{url('/elerning')}}">Back</a>
  </div>
</div>
@endsection

@section('scripts')
<script>
  const courseId = {{$course->id}}

  btnAddCart.onclick = () => {
    console.log(courseId)
    axios.post('/add-to-cart', {
      course_id: courseId
    })
    .then(response => {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: response.data.message,
          showConfirmButton: false,
          timer: 1000
        })
        console.log(response.data.message);
        // คุณสามารถทำอะไรก็ได้หลังจากเพิ่มคอร์สลงใน Session แล้ว
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
  }

  btnBuyNow.onclick = () => {
    console.log("fff")
    axios.post('/add-to-cart', {
      course_id: courseId
    })
    .then(response => {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: response.data.message,
          showConfirmButton: false,
          timer: 1000
        }).then(() => location.href = "/cart")
        // คุณสามารถทำอะไรก็ได้หลังจากเพิ่มคอร์สลงใน Session แล้ว
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
  }
</script>
@endsection