@extends('layouts.main')
@section('title') News & Event @endsection
@section('content')
<h1 class="text-2xl text-center pt-20">News And Events </h1>
<div class="w-11/12 mx-auto">
  <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" loop="true" slides-per-view="3"
    space-between="20" free-mode="true">
    <!-- เอาเมาส์ไปชี้แล้วมีกล่องข้อความขึ้นมาจากด้านล่าง ที่บอกหัวข้อ  -->
    <swiper-slide class="my-10 text-center">
      <a href="/newsdetails">
        <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
          <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
        </div>
        <div class="slide-details absolute bottom-0 text-center text-white w-full">
          <h2 class="text-2xl">Slide 1</h2>
          <p>รายละเอียดเกี่ยวกับ Slide 1</p>
        </div>
      </a>
    </swiper-slide>

    <swiper-slide class="my-10 text-center">
      <a href="/newsdetails">
        <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
          <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
        </div>
        <div class="slide-details absolute bottom-0 text-center text-white w-full">
          <h2 class="text-2xl">Slide 1</h2>
          <p>รายละเอียดเกี่ยวกับ Slide 1</p>
        </div>
      </a>
    </swiper-slide>
      
    <swiper-slide class="my-10 text-center">
      <a href="/newsdetails">
        <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
          <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
        </div>
        <div class="slide-details absolute bottom-0 text-center text-white w-full">
          <h2 class="text-2xl">Slide 1</h2>
          <p>รายละเอียดเกี่ยวกับ Slide 1</p>
        </div>
      </a>
    </swiper-slide>

    <swiper-slide class="my-10 text-center">
      <a href="/newsdetails">
        <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
          <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
        </div>
        <div class="slide-details absolute bottom-0 text-center text-white w-full">
          <h2 class="text-2xl">Slide 1</h2>
          <p>รายละเอียดเกี่ยวกับ Slide 1</p>
        </div>
      </a>
    </swiper-slide>

    <swiper-slide class="my-10 text-center">
      <a href="/newsdetails">
        <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
          <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
        </div>
        <div class="slide-details absolute bottom-0 text-center text-white w-full">
          <h2 class="text-2xl">Slide 1</h2>
          <p>รายละเอียดเกี่ยวกับ Slide 1</p>
        </div>
      </a>
    </swiper-slide>

    <swiper-slide class="my-10 text-center">
      <a href="/newsdetails">
        <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
          <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
        </div>
        <div class="slide-details absolute bottom-0 text-center text-white w-full">
          <h2 class="text-2xl">Slide 1</h2>
          <p>รายละเอียดเกี่ยวกับ Slide 1</p>
        </div>
      </a>
    </swiper-slide>

    <swiper-slide class="my-10 text-center">
      <a href="/newsdetails">
        <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
          <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
        </div>
        <div class="slide-details absolute bottom-0 text-center text-white w-full">
          <h2 class="text-2xl">Slide 1</h2>
          <p>รายละเอียดเกี่ยวกับ Slide 1</p>
        </div>
      </a>
    </swiper-slide>

    <swiper-slide class="my-10 text-center">
      <a href="/newsdetails">
        <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
          <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
        </div>
        <div class="slide-details absolute bottom-0 text-center text-white w-full">
          <h2 class="text-2xl">Slide 1</h2>
          <p>รายละเอียดเกี่ยวกับ Slide 1</p>
        </div>
      </a>
    </swiper-slide>
  </swiper-container>

  <a href="/newsdetails">
    <div class="flex mb-4 overflow-hidden">
      <div class="h-76 w-80 overflow-hidden">
        <img class="border duration-300 hover:brightness-[0.7] hover:scale-125" src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
      </div>
      <div class="px-10 w-[600px]">
        <h1 class="text-2xl mb-4">หัวข้อข่าว</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad inventore, ea aut tempora eum optio dolorum perspiciatis architecto! Aliquid quo officia hic odit iusto dolores, reiciendis iste nemo mollitia amet.</p>
      </div>
    </div>
  </a>

  <a href="/newsdetails">
    <div class="flex mb-4 overflow-hidden">
      <div class="h-76 w-80 overflow-hidden">
        <img class="border duration-300 hover:brightness-[0.7] hover:scale-125" src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
      </div>
      <div class="px-10 w-[600px]">
        <h1 class="text-2xl mb-4">หัวข้อข่าว</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad inventore, ea aut tempora eum optio dolorum perspiciatis architecto! Aliquid quo officia hic odit iusto dolores, reiciendis iste nemo mollitia amet.</p>
      </div>
    </div>
  </a>
</div>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
@endsection