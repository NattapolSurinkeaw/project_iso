<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ISOConsult elerning - Your Source for Quality Products">
  <meta name="keywords" content="ISOConsult, elerning, products, quality, online training">
  <meta name="author" content="ISOConsult Company">
  <meta name="robots" content="index, follow">

  <title>@yield('title')</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>  <!-- swipper ของหน้า Home -->
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>  <!-- แสดงปฎิทิน -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> <!--animate.cc -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />  <!-- AOS animate -->
</head>
<body>
  @include('layouts.header')
  

  @yield('content')
 

  {{-- @include('layouts.footer') --}}

  {{-- use aos --}}
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  @vite('resources/js/main.js')
  @yield('scripts')
  
</body>
</html>