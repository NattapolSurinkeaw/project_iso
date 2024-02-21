@extends('layouts.main')
@section('meta-description','ISOConsult elerning - Your Source for Quality Products')
@section('meta-keywords', '')
@section('title', 'News & Event')
@section('content')
<h1 class="text-3xl text-center my-4">News And Events </h1>
<div class="w-11/12 mx-auto">
  <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" loop="true" slides-per-view="3"
    space-between="20" free-mode="true">
    <!-- เอาเมาส์ไปชี้แล้วมีกล่องข้อความขึ้นมาจากด้านล่าง ที่บอกหัวข้อ  -->
    @foreach($new_news as $news)
      <swiper-slide class="mb-10 text-center">
        <a href="/newsdetails/{{$news->id}}">
          <img class="relative w-full h-60" src="{{$news->img_news_events}}" alt="">
          <div class="absolute top-[12px] left-[21px] transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
            <h1 class="bg-red-700 px-1 text-white font-bold">New</h1>
          </div>
          <div class="slide-details absolute bottom-0 text-center text-white w-full">
            <h2 class="text-2xl">{{$news->name}}</h2>
            <p>{{$news->description}}</p>
          </div>
        </a>
      </swiper-slide>
    @endforeach
  </swiper-container>

  <div class="w-full flex gap-4 lg:justify-center max-2xl:flex-col">
    <div class="flex flex-col gap-2 w-full 2xl:w-[75%] rounded-lg shadow-lg">
      <h1 class="text-center rounded-lg bg-gray-600 py-2 text-xl text-white">ข่าวทั้งหมด</h1>
      @foreach($newsEvents as $index => $news)
      <a class="px-4" href="/newsdetails/{{$news->id}}">
        <div class="flex items-center break-words truncate @if($index % 2 !== 0) bg-gray-200 @endif">
          <div class="w-96 h-40 max-lg:w-40 overflow-hidden rounded-lg">
            <img class="w-full h-full border duration-300 brightness-[0.9] hover:brightness-[0.6] hover:scale-125" src="{{$news->img_news_events}}" alt="">
          </div>
          <div class="overflow-hidden px-10 w-full flex flex-col justify-start @if($index % 2 !== 0) bg-gray-200 @endif">
            <h1 class="text-2xl text-gray-400 p-2 underline w-full">{{$news->name}}</h1>
            <p>{{$news->description}}</p>
            <div class="lg:w-full whitespace-normal max-md:hidden break-words h-[90px] overflow-hidden max-xs:hidden">{!!$news->content!!}</div>
            <div class="flex gap-2 my-2">
              <span class="flex gap-1 item-certer text-gray-500">{{$news->view}} <box-icon name='show'></box-icon></span>
              {{-- <span>/</span>
              <span class="flex gap-1 items-center text-gray-500">0 <box-icon name='facebook-square' type='logo' ></box-icon></span>
              <span>/</span>
              <span class="flex gap-1 items-center text-gray-500">0 <box-icon name='twitch' type='logo' ></box-icon></span> --}}
            </div>
          </div>
        </div>
      </a>
      @endforeach

      <div class="mx-20 flex justify-end">
        <div class="w-96">
            {{ $newsEvents->links() }}
        </div>
      </div>
    </div>

    <div class="max-2xl:order-first w-full 2xl:max-w-[400px] p-2 rounded-lg shadow-lg">
      <h1 class="text-center text-xl font-medium mb-2">ข่าวที่น่าสนใจ</h1>
      <div class="max-2xl:flex overflow-hidden overflow-x-auto">
        @foreach($topnews as $news)
        <a href="/newsdetails/{{$news->id}}">
          <div class="w-full rounded-lg bg-white my-5 flex flex-col gap-2 items-center justify-center">
            <div class="overflow-hidden w-11/12 rounded-lg">
              <img class="w-full max-2xl:w-80 h-40 border duration-300 brightness-[0.9] hover:brightness-[0.6] hover:scale-125" src="{{$news->img_news_events}}" alt="">
            </div>
            <h1 class="text-lg text-blue-800">{{$news->name}}</h1>
            <h1>{{$news->description}}</h1>
            <div class="p-2 flex gap-2">
              <span class="flex gap-1 item-certer text-gray-500">{{$news->view}} <box-icon name='show'></box-icon></span>
              {{-- <span>/</span>
              <span class="flex gap-1 items-center text-gray-500">0 <box-icon name='facebook-square' type='logo' ></box-icon></span>
              <span>/</span>
              <span class="flex gap-1 items-center text-gray-500">0 <box-icon name='twitch' type='logo' ></box-icon></span> --}}
            </div>
          </div>
        </a>
      @endforeach
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script>
  let swip = document.querySelector('.mySwiper')
  let count_swip = swip.getAttribute('slides-per-view')
  console.log(count_swip)

  function setSwiperSlidesPerView() {
    if (window.innerWidth < 415) {
      swip.swiper.params.slidesPerView = 1;
    } else if (window.innerWidth < 900) {
      swip.swiper.params.slidesPerView = 2;
    } else {
      swip.swiper.params.slidesPerView = count_swip;
    }
    
    swip.swiper.update(); // อัปเดต Swiper
  }

  // เรียกใช้ฟังก์ชันเมื่อหน้าเว็บโหลดเสร็จและเมื่อหน้าจอปรับขนาด
  window.addEventListener('load', setSwiperSlidesPerView);
  window.addEventListener('resize', setSwiperSlidesPerView);
</script>
@endsection