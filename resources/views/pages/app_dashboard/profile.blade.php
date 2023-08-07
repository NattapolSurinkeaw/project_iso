@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
    @include('pages.app_dashboard.sidebar')
  </div>
  <!-- box-profile -->
  <div class="w-full bg-gray-100 rounded-lg p-4 flex flex-col items-center gap-4">
    <h1 class="text-xl font-bold">Profile</h1>
    <img class="w-80 h-96 bg-gray-300 rounded-lg" src="image/icon/user.png" alt="">
    <input class="" type="file">
    <div class="flex gap-4">
      <p>name</p> 
      <p>{{$user->name}}</p>
    </div>
    <p></p>
  </div>
  <!-- endbox -->

</div>
@endsection