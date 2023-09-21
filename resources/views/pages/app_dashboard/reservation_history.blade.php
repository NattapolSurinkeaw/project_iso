@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-4 px-1 flex gap-4">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
    @include('pages.app_dashboard.components.sidebar')
  </div>
  <!-- box-profile -->
  <div class="w-full bg-gray-100 rounded-lg p-4 flex flex-col items-center gap-4">
    <h1 class="text-2xl font-medium">Reservation History</h1>
    
  </div>
  <!-- endbox -->

</div>
@endsection