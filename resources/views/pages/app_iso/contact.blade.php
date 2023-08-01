@extends('layouts.main')
@section('title') ContactPage @endsection
@section('content')
<div class="p-20 bg-gray-100 h-screen">
  <h1 class="text-2xl text-center">Contact</h1>
  <div class="m-10 flex justify-center gap-10">
    
    <div class="group h-96 w-80 [perspective:1000px]">
      <div class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
        <div class="absolute inset-0">
          <img class="h-full w-full rounded-xl object-cover shadow-xl shadow-black/40" src="https://img.freepik.com/premium-vector/location-point-icon-vector-illustration_9999-17225.jpg?w=2000" alt="" />
        </div>
        <div class="absolute inset-0 h-full w-full rounded-xl bg-black/80 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden]">
          <div class="flex min-h-full flex-col items-center justify-center">
            <h1 class="text-2xl pb-3 font-bold">OFFICE ADDRESS</h1>
            <p class="text-lg">80/8 Samwa Road</p>
            <p class="text-lg">Bangchan, Khlongsamwa</p>
            <p class="text-lg">Bangkok 10510</p>
          </div>
        </div>
      </div>
    </div>

    <div class="group h-96 w-80 [perspective:1000px]">
      <div class="relative h-full w-[full] rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
        <div class="absolute inset-0">
          <img class="h-full w-full rounded-xl object-contain shadow-xl shadow-black/40" src="https://png.pngitem.com/pimgs/s/20-202062_old-phone-old-phone-icon-png-transparent-png.png" alt="" />
        </div>
        <div class="absolute inset-0 h-full w-full rounded-xl bg-black/80 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden]">
          <div class="flex min-h-full flex-col items-center justify-center">
            <h1 class="text-2xl pb-3 font-bold">PHONE AND FAX</h1>
            <p class="text-lg">Local: +66(0)2-107-6977</p>
            <p class="text-lg">CS: +66(0)88-905-0555</p>
            <p class="text-lg">FA: +66(0)90-940-9509</p>
          </div>
        </div>
      </div>
    </div>

    <div class="group h-96 w-80 [perspective:1000px]">
      <div class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
        <div class="absolute inset-0">
          <img class="h-full w-full rounded-xl object-contain shadow-xl shadow-black/40" src="https://cdn-icons-png.flaticon.com/512/2549/2549872.png" alt="" />
        </div>
        <div class="absolute inset-0 h-full w-full rounded-xl bg-black/80 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden]">
          <div class="flex min-h-full flex-col items-center justify-center">
            <h1 class="text-2xl pb-3 font-bold">EMAIL ADDRESS</h1>
            <p class="text-lg">www.isoconsult.org</p>
            <p class="text-lg">cs.isoconsult@gmail.com</p>
            <p class="text-lg">Line ID: isoconsult</p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <iframe class="rounded-xl border" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15496.753526029157!2d100.726389!3d13.827724!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d648e0b6f5499%3A0x9115940a3a6aea60!2sQuality%20Associates%20Ltd.!5e0!3m2!1sth!2sth!4v1688743924456!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </div>
  
  
</div>
@endsection