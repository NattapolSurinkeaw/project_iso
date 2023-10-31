@extends('layouts.main')
@section('title') NewsDetail @endsection
@section('content')
<div class="w-11/12 mx-auto my-4">
  <div class="flex justify-center my-4">
    <h1 class="text-center text-4xl mb-4">Detail News : </h1>
    <h1 class="text-center text-4xl mb-4 ml-4">{{$getNews->name}}</h1>
  </div>
  <div class="w-full">
    <img class="mx-auto w-[1500px] h-[600px]" src="{{$getNews->img_news_events}}" alt="">
  </div>

  <div class="mx-20 mt-4">
    {!! $getNews->content !!}
  </div>

  <div class="mx-20 my-10">
    <p>เผยแพร่เมื่อ {{$getNews->created_at->format('d-M-Y')}}</p>
    {{-- <div class="flex">
      <p>แบ่งปัน :</p>
    </div> --}}
  </div>
</div>
@endsection