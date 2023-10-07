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
    <div class="bg-gray-200 p-4 rounded-lg">
      <h1 class="text-3xl text-center mb-4">รายละเอียด</h1>
      <h1 class="text-2xl text-center">{{$course->description}}</h1>
      <div class="flex">
        <h1 class="text-xl">detail : </h1>
        <h1 class="text-xl ml-1"> {{$course->details}}</h1>
      </div>
      <h1 class="text-xl">price : {{$course->price}}</h1>
    </div>

    <div class="bg-gray-200 p-4 rounded-lg">
      <h1 class="text-3xl text-center mb-4">เนื้อหาหลักสูตร</h1>
      <div class="flex">
        <h1 class="text-xl">detail : </h1>
        <h1 class="text-xl">{{$course->details}}</h1>
      </div>
      <h1 class="text-xl">price : {{$course->price}}</h1>
    </div>


    <a href="{{url('/elerning')}}">back</a>
  </div>
</div>
@endsection