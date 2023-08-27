@extends('layouts.main')
@section('title') News & Event @endsection
@section('content')
<h1 class="text-2xl text-center font-bold pt-20">News And Events </h1>
<div class="w-11/12 mx-auto">
  <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" loop="true" slides-per-view="3"
    space-between="20" free-mode="true">
    <!-- เอาเมาส์ไปชี้แล้วมีกล่องข้อความขึ้นมาจากด้านล่าง ที่บอกหัวข้อ  -->
    @foreach($newsEvents as $news)
      <swiper-slide class="my-10 text-center">
        <a href="/newsdetails/{{$news->id}}">
          <img class="relative" src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="">
          <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
            <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
          </div>
          <div class="slide-details absolute bottom-0 text-center text-white w-full">
            <h2 class="text-2xl">{{$news->name}}</h2>
            <p>{{$news->content}}</p>
          </div>
        </a>
      </swiper-slide>
    @endforeach
  </swiper-container>

  <div class="flex gap-4">
    <div class="w-full pl-2 py-2 rounded-lg bg-gray-100">
      @foreach($newsEvents as $news)
      <a href="/newsdetails/{{$news->id}}">
        <div class="flex overflow-hidden">
          <div class="h-76 w-80  overflow-hidden">
            <img class="border duration-300 brightness-[0.9] hover:brightness-[0.6] hover:scale-125" src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
          </div>
          <div class="px-10 w-[600px] flex flex-col justify-center">
            <h1 class="text-2xl text-gray-400 border-r-8 border-gray-100 p-2 underline w-full">{{$news->name}}</h1>
            <p >{{$news->description}}</p>
            <div class="flex gap-2">
              <span class="flex gap-1 item-certer text-gray-500">0 <box-icon name='show'></box-icon></span>
              <span>/</span>
              <span class="flex gap-1 items-center text-gray-500">0 <box-icon name='facebook-square' type='logo' ></box-icon></span>
              <span>/</span>
              <span class="flex gap-1 items-center text-gray-500">0 <box-icon name='twitch' type='logo' ></box-icon></span>
            </div>
          </div>
        </div>
        <hr class="border border-red-200 my-4">
      </a>
      @endforeach
    </div>

    <div class="w-full max-w-[400px] p-2 rounded-lg bg-gray-100">
      <h1 class="text-center text-xl font-bold mb-2">ข่าวที่น่าสนใจ</h1>
      @foreach($newsEvents as $news)
      <a href="/newsdetails/{{$news->id}}">
        <div class="w-full rounded-lg bg-white my-5 flex flex-col gap-2 items-center justify-center">
          <h1 class="text-lg text-blue-800">{{$news->name}}</h1>
          <div class="overflow-hidden w-11/12 rounded-lg">
            <img class="border duration-300 brightness-[0.9] hover:brightness-[0.6] hover:scale-125" src="https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
          </div>
          <h1>{{$news->description}}</h1>
          <div class="p-2 flex gap-2">
            <span class="flex gap-1 item-certer text-gray-500">0 <box-icon name='show'></box-icon></span>
            <span>/</span>
            <span class="flex gap-1 items-center text-gray-500">0 <box-icon name='facebook-square' type='logo' ></box-icon></span>
            <span>/</span>
            <span class="flex gap-1 items-center text-gray-500">0 <box-icon name='twitch' type='logo' ></box-icon></span>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
@endsection