@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-200 px-2 rounded-xl">
    @include('pages.app_dashboard.sidebar')
  </div>
  <!-- box-profile -->
  <div class="w-full flex flex-col items-center">
    <h1>Profile</h1>
    <img src="image/icon/user.png" alt="">
    <p>name</p>
    <p></p>
  </div>
  <!-- endbox -->

  <!-- box-mycourse -->
  <div>
    my
  </div>
  <!-- endbox-mycourse -->

</div>
@endsection