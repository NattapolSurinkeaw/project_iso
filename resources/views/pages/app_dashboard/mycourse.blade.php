@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-4 px-1 gap-4 flex max-xs:flex-col">
    @include('pages.app_dashboard.components.sidebar')
  <!-- box-profile -->
  <div class="w-full max-xs:min-h-[750px] bg-gray-100 rounded-lg p-4 flex flex-col items-center gap-4">
    <h1 class="text-2xl font-medium">My course</h1>
    <div class="w-full p-5 bg-white flex flex-wrap max-xs:justify-center gap-2 rounded-lg">
      @if(count($elerningcourses) > 0)
      @foreach ($elerningcourses as $elerningcourse)
      <a href="{{url('/course/'.$elerningcourse->id)}}">
        <div class="w-96 border-2 rounded-xl p-5 flex flex-col justify-center items-center gap-2 shadow-lg">
          <div class="overflow-hidden rounded-lg h-42 w-64">
              @if(!empty($elerningcourse->img_course))
                  <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="{{$elerningcourse->img_course}}" alt="">
              @else
                  <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="/image/icon/isologo.png" alt="">
              @endif
          </div> 
          <div class="w-full flex flex-col items-start gap-2">
              <div class="flex justify-between items-center">
                  <h1 class="text-2xl font-normal w-full break-words">{{$elerningcourse->course_name}}</h1>
              </div>

              <div class="flex justify-between items-center">
                  <div class="flex justify-between">
                      <h1 class="text-lg text-gray-400">{{$elerningcourse->user_name}}</h1>
                  </div>
              </div>
          </div>
        </div>
      </a>
      @endforeach
      @else
      <div class="mx-auto">
          <img class="w-32 " src="/image/icon/bookempty.png" alt="">
          <p class="text-gray-500">Course empty...</p>
          <a class="text-blue-500" href="{{url('/elerning')}}">View the course</a>
      </div>
      @endif
    </div>
  </div>
  <!-- endbox -->

</div>
@endsection