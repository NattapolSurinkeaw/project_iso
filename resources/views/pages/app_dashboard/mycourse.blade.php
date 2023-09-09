@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="pt-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
    @include('pages.app_dashboard.components.sidebar')
  </div>
  <!-- box-profile -->
  <div class="w-full bg-gray-100 rounded-lg p-4 flex flex-col items-center gap-4">
    <h1 class="text-xl font-bold">My course</h1>
    
  </div>
  <!-- endbox -->

</div>
@endsection