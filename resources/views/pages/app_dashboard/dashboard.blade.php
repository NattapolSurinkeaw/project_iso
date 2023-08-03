@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-200 px-2 rounded-xl">
    @include('pages.app_dashboard.sidebar')
  </div>
  <!-- box-profile -->
  <div class="w-full flex flex-col gap-4 items-center">
    <div class="flex flex-col justify-center items-center">
      <h1>Profile</h1>
      <img class="w-24 h-24" src="image/icon/user.png" alt="">
      <p>name nattapol surinkeaw</p>
      <p></p>
    </div>
     <!-- box-mycourse -->
  <div>
    <h1>my course</h1>

    
  </div>
  <!-- endbox-mycourse -->
  </div>
  <!-- endbox -->

</div>
@endsection