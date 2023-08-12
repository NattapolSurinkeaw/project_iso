@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
    @include('pages.app_dashboard.components.sidebar')
  </div>
  <!-- box-profile -->
  <div class="w-full bg-gray-100 rounded-lg p-4 flex flex-col gap-4 items-center">
    <div class="flex flex-col justify-center items-center gap-4">
      <h1 class="text-xl font-bold">Profile</h1>

      @if (isset($user->img_profile))
      <img class="w-80 h-96 bg-gray-300 rounded-lg" src="{{$user->img_profile}}" id="Opt" alt="">
      @else
      <img class="w-80 h-96 bg-gray-300 rounded-lg" src="image/icon/user.png" id="Opt" alt="">
      @endif

      <div class="flex gap-4">
        <p>name</p> 
        <p>{{$user->name}}</p>
      </div>
      <a class="bg-orange-500 p-1 px-2 rounded-lg text-white" href="{{url('/profile')}}">แก้ไข</a>
    </div>
     <!-- box-mycourse -->
    <div>
      <h1 class="text-xl font-bold">my course</h1>

      
    </div>
  <!-- endbox-mycourse -->
  </div>
  <!-- endbox -->

</div>
@endsection