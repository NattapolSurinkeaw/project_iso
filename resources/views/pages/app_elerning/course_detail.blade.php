@extends('layouts.main')
@section('title') CoursePage @endsection
@section('content')
<div>
  <div class="bg-red-500 flex">
    <div class="w-full flex flex-col items-center justify-center">
      <h1 class="text-3xl text-white">Detail : {{$course->course_name}}</h1>
      <h1 class="text-3xl text-white">description : {{$course->description}}</h1>
    </div>
    <div class="w-full">
      <img class="w-full h-80" src="{{$course->img_course}}" alt="">
    </div>
  </div>

  <div class="w-11/12 mx-auto my-5 flex flex-col gap-4">
    <div class="flex gap-10 max-md:flex-col">
      <div class="w-full flex flex-col gap-4">
        <div class="bg-gray-200 p-4 rounded-lg">
          <h1 class="text-3xl text-center mb-4">รายละเอียด</h1>
          <h1 class="text-2xl text-center">{{$course->description}}</h1>
          <div class="flex gap-4" id="box">
            <h1 class="text-xl w-20 max-md:w-40 max-sm:w-32">detail : </h1>
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

      <div class="w-full p-4 max-w-[400px] bg-gray-300 rounded-lg">
        <h1 class="text-xl">ราคา</h1>
        <h1 class="text-xl">price : {{$course->price}}</h1>
        <hr class="border border-2 my-1">
        <button>เพิ่มใส่ตระกร้า</button>
        <button>ทำการสั่งซื้อทันที</button>
      </div>
    </div>


    <a href="{{url('/elerning')}}">back</a>
  </div>
</div>
@endsection