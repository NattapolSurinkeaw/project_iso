<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/x-icon" href="/image/svg/favicon.png">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>  <!-- แสดงปฎิทิน -->
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> <!--animate.cc -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />  <!-- AOS animate -->
</head>
<body>

  <div id="main-box" class="flex gap-2 h-screen overflow-hidden">
    <div id="navbar" class="w-80 bg-[#74788A] max-w-[240px] duration-300">
        @include('backend.layouts.sidebar')
    </div>
  
    <div class="w-full flex flex-col gap-2">
        <div class="bg-gray-400 p-2 flex justify-between">
          <button id="btn-close" class="flex justify-center items-center"><box-icon name='chevrons-left'></box-icon></button>
          <div class="mr-4 flex items-center gap-2">
            {{-- <img src="" alt=""> --}}
            <box-icon name='user-circle' type='solid' ></box-icon>
            <p>{{$user->name}}</p>
          </div>
        </div>
        <div id="main-backend" class="bg-gray-100 h-full overflow-auto">
          @yield('container')
        </div>
    </div>
  </div>
 

  {{-- @include('layouts.footer') --}}

  {{-- use aos --}}
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  @vite('resources/js/backend.js')
  @yield('be-scripts')
  
</body>
</html>