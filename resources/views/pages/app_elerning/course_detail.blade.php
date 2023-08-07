@extends('layouts.main')
@section('title') CoursePage @endsection
@section('content')
<div class="bg-gray-100 py-20">
  <div class="w-11/12 mx-auto">
    <h1 class="text-3xl text-center">Detail : {{$course->course_name}}</h1>
    <h1 class="text-3xl text-center">name : {{$course->user_name}}</h1>
    <h1 class="text-3xl text-center">price : {{$course->price}}</h1>
    <h1 class="text-3xl text-center">description : {{$course->description}}</h1>
    <a href="{{url('/elerning')}}">back</a>
    
  </div>
</div>
@endsection