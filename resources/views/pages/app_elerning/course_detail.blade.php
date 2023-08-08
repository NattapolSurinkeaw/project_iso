@extends('layouts.main')
@section('title') CoursePage @endsection
@section('content')
<div class="bg-gray-100 py-20">
  <div class="bg-red-500 flex">
    <div class="w-full">
      <h1 class="text-3xl text-white">Detail : {{$course->course_name}}</h1>
      <h1 class="text-3xl text-white">description : {{$course->description}}</h1>
    </div>
    <div class="w-full">
      <img src="" alt="">
      <h1>1</h1>
    </div>
  </div>

  <div class="w-11/12 mx-auto">
    <h1 class="text-3xl text-center">name : {{$course->user_name}}</h1>
    <h1 class="text-3xl text-center">price : {{$course->price}}</h1>
    <a href="{{url('/elerning')}}">back</a>
    
  </div>
</div>
@endsection