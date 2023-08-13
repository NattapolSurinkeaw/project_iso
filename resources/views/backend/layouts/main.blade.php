<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>  <!-- แสดงปฎิทิน -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> <!--animate.cc -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />  <!-- AOS animate -->
</head>
<body>

  <div class="flex gap-10">
    <div class="w-full bg-gray-400 max-w-[240px]">
        @include('backend.layouts.sidebar')
    </div>
  
    <div class="w-full bg-gray-400" >
        @yield('container')
    </div>
  </div>
 

  {{-- @include('layouts.footer') --}}

  {{-- use aos --}}
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  @vite('resources/js/backend.js')
  @yield('scripts')
  
</body>
</html>