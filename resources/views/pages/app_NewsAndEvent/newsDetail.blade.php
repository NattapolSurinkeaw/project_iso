@extends('layouts.main')
@section('title') NewsDetail @endsection
@section('content')
<div class="w-11/12 mx-auto pt-20">
  {{-- @dd($getNews) --}}
  <h1 class="text-center text-2xl mb-4">news Detail</h1>
  <h1 class="text-center text-2xl mb-4">{{$getNews->name}}</h1>
  <img src="{{$getNews->img_news_events}}" alt="">
  <p>{{$getNews->created_at}}</p>
  <div>
    {!! $getNews->content !!}
  </div>
</div>
@endsection