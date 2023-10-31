@extends('layouts.main')
@section('title') NewsDetail @endsection
@section('content')
<div>
    <div class="bg-red-500 flex max-lg:flex-col">
      <div class="w-full flex flex-col items-center justify-center p-4">
        <h1 class="text-3xl text-white">Detail : {{$taining->name}}</h1>
      </div>
      <div class="w-full max-lg:order-first">
        <img class="w-full h-80" src="{{$taining->img_training}}" alt="">
      </div>
    </div>
  
    <div class="w-11/12 mx-auto my-5 flex flex-col gap-4">
      <div class="flex gap-10 max-md:flex-col">
        <div class="w-full flex flex-col gap-4">
          <div class="bg-gray-200 p-4 rounded-lg">
            <h1 class="text-3xl text-center mb-4">รายละเอียด</h1>
            <h1 class="text-2xl text-center">{{$taining->name}}</h1>
            <div class="flex gap-4" id="box">
              <h1 class="text-xl w-20 max-md:w-40 max-sm:w-32">code : </h1>
              <h1 class="text-xl break-all">{{$taining->code}}</h1>
            </div>
          </div>
      
          <div class="bg-gray-200 p-4 rounded-lg">
            <h1 class="text-3xl text-center mb-4">เนื้อหาหลักสูตร</h1>
            <h1 class="text-xl">จำนวนวันที่อบรม : {{$taining->day}}</h1>
            <h1 class="text-xl">วันที่อบรม : {{ \Carbon\Carbon::parse($taining->date)->format('d-M-Y') }}</h1>
          </div>
        </div>
  
        <div class="w-full p-4 max-w-[400px] bg-gray-300 rounded-lg">
          <h1 class="text-xl">ราคา</h1>
          <h1 class="text-xl">price : {{$taining->fee}}</h1>
          <hr class="border border-2 my-2">
          <div class="px-2 flex flex-col gap-3">
            <a href="{{ url('/reserveday/'.$taining->id) }}" class="w-full bg-red-600 p-1 rounded-lg text-white">จองอบรม</a>
          </div>
        </div>
      </div>
      <a class="w-20 py-1 text-center bg-red-500 text-white rounded-lg" href="{{url('/training')}}">back</a>
    </div>
  </div>
@endsection