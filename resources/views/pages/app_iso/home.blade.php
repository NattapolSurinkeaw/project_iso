@extends('layouts.main')
@section('title') HomePage @endsection
@section('content')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

<swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" centered-slides="true" autoplay-delay="2000" autoplay-disable-on-interaction="false">
  <swiper-slide>
    <img class="brightness-50 h-[941px] w-full" src="https://isoconsult.org/images/header-slider/home-v1/header-slide.jpg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px]">In-house & On-line Learning!</h1>
      <h1 class="text-[60px] text-orange-500 font-bold my-5">ISO CONSULTING & TRAINING</h1>
      <p>ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001, ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO22000, TL9000, Lean, Six Sigma,..etc.</p>
    </div>
  </swiper-slide>
  <swiper-slide>
    <img class="brightness-50 h-[941px] w-full" src="https://isoconsult.org/images/header-slider/home-v1/header-slide.jpg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px]">ISO/QSEH consulting services!</h1>
      <h1 class="text-[60px] text-orange-500 font-bold my-5">ISO DOCUMENTATION</h1>
      <p>We provide creating a comprehensive quality system and documentation both hard-paper and software.</p>
    </div>
  </swiper-slide>
  <swiper-slide>
    <img class="brightness-50 h-[941px] w-full" src="https://isoconsult.org/images/header-slider/home-v1/header-slide.jpg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px]">Online Learning Anytime, Anywhere!</h1>
      <h1 class="text-[60px] text-orange-500 font-bold my-5">ELEARNING & ECONSULTING SERVICES</h1>
      <p>To support time management and effectiveness of implementation, we provide on-line consulting and training with low cost to our clients.</p>
    </div>
  </swiper-slide>
</swiper-container>
<div class="grid lg:grid-cols-6 md:grid-cols-3 sm:grid-cols-1 gap-10 place-items-center p-4">
  <div class="flex gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-2xl">
    <img class="w-24 h-24" src="image/icon/book.png" alt="">
    <div class="flex gap-4 flex-col justify-center">
      <h1 class="text-lg font-medium">ป้ายประชาสัมพันธ์</h1>
      <p class="font-medium">45,00</p>
    </div>
  </div>

  <div class="flex gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-2xl">
    <img class="w-24 h-24" src="image/icon/book.png" alt="">
    <div class="flex gap-4 flex-col justify-center">
      <h1 class="text-lg font-medium">วิดีโอแนะนำ</h1>
      <p class="font-medium">45,00</p>
    </div>
  </div>

  <div class="flex gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-2xl">
    <img class="w-24 h-24" src="image/icon/book.png" alt="">
    <div class="flex gap-4 flex-col justify-center">
      <h1 class="text-lg font-medium">หลักสูตรของเรา</h1>
      <p class="font-medium">45,00</p>
    </div>
  </div>

  <div class="flex gap-4 border px-6 py-2 bg-gray-200 rounded-lg shadow-2xl">
    <img class="w-24 h-24" src="image/icon/audio.png" alt="">
    <div class="flex gap-4 flex-col justify-center">
      <h1 class="text-lg font-medium">ข่าวประชาสัมพันธ์</h1>
      <p class="font-medium">45,00</p>
    </div>
  </div>

  <div class="flex gap-4 border px-4 py-2 bg-gray-200 rounded-lg shadow-2xl">
    <img class="w-20 h-24" src="image/icon/magazine.png" alt="">
    <div class="flex gap-4 flex-col justify-center">
      <h1 class="text-lg font-medium">เอกสารที่เผยแพร่</h1>
      <p class="font-medium">45,00</p>
    </div>
  </div>

  <div class="flex gap-4 border px-4 py-2 bg-gray-200 rounded-lg shadow-2xl">
    <img class="w-28 h-24" src="image/icon/video.png" alt="">
    <div class="flex gap-4 flex-col justify-center">
      <h1 class="text-lg font-medium">หน่วยงานที่เกี่ยวข้อง</h1>
      <p class="font-medium">45,00</p>
    </div>
  </div>
</div>
{{-- {{Auth::user()->name}} --}}
{{-- @dd($user) --}}
{{-- @if($user)
  <h1>Mr => {{$user->email}}</h1>
@else 
  <h1>nodata</h1>
@endif --}}

<div data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out" class="m-10 mx-auto flex w-10/12 overflow-hidden rounded-xl border drop-shadow h-[450px]">
  <div class="w-full p-5 ">
    <h1 class="text-4xl font-medium">WELCOME TO ISO CONSULT</h1>
    <hr class="my-1 w-2/12 border border-red-600" />
    <p class="mb-10 text-gray-500">The ISO consultant in Thailand</p>
    <p >ISO Consult.org เป็นที่ปรึกษาระบบมาตรฐานสากลที่ได้นำสิ่งใหม่ๆในระดับสากลซึ่งยอมรับกันทั่วโลกที่เหมาะสมกับองค์กรลูกค้ามาใช้งานเป็นการพัฒนาภายใต้ความมุ่งมั่นของการดำเนินการให้ประสบความสำเร็จตามแผนการดำเนินการเพื่อให้องค์กรลูกค้าสามารถแข่งขันได้ ที่ปรึกษาและวิทยากรที่ได้รับการคัดเลือกมาอย่างดีทั้งคุณวุฒิและประสบการณ์ในงานมากกว่า 20 ปี ผ่านการฝึกอบรมมากว่า 125 หลักสูตรทั้งในและต่างประเทศ ให้บริการลูกค้าในการจัดทำระบบมามากกว่า 60 โครงการ ทำให้เราได้รับความไว้วางใจในความสามารถจากลูกค้า การบริการของเราครอบคลุมการพัฒนาบุคลากรและระบบมาตรฐานในทุกส่วนงาน ทุกอุตสาหกรรมทั้ง อากาศยาน ยานยนต์ ปิโตรเลี่ยม การแพทย์ อาหารและยา เทคโนโลยีสารสนเทศ และอื่นๆ ทั้งภาครัฐและเอกชนเรามีผู้เชี่ยวชาญโดยเฉพาะ ด้วยหลักสูตรฝึกอบรมที่ทันสมัย มีรูปแบบการถ่ายทอดที่ทั้งแบบ on-line training (eLearning) และ on-site(In-house training) รวมทั้ง ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001(OHSAS), ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO/FSSC22000, TL9000, ISO31000, SA8000, ISO50001, ISO/TS22163 (IRIS), GMP/HACCP, Lean, Six Sigma, FAA, EASA, NADCAP, BRC, RTAC ... ซึ่งเราสรรหาสิ่งที่ดีที่สุดให้กับองค์กรลูกค้าเพื่อให้บรรลุซึ่งความต้องการเสมอ นอกจากภาษาไทยแล้วเราสามารถจัดทำเอกสารได้หลายภาษาทั้งภาษาอังกฤษ ญี่ปุ่น จีน และอื่นๆ เน้นให้สามารถนำไปประยุกต์และปฏิบัติได้จริงในธุรกิจทุกประเภท</p>
  </div>
  <img class="h-[470px] w-full" src="https://images.unsplash.com/photo-1543599538-a6c4f6cc5c05?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="" />
</div>

<div class="flex flex-col gap-5 w-10/12 mx-auto mb-4">
  <h1 class="text-center mb-10 text-2xl font-medium">CHECK OUT THE HOT RELEASES</h1>
  <div class="flex justify-start items-center gap-10">
    <img class="w-72 rounded-xl" src="https://media.istockphoto.com/id/1425406857/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99-iso-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%84%E0%B9%82%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B9%8D%E0%B8%B2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4.jpg?s=1024x1024&w=is&k=20&c=mS8Ml7NhgFzRvTr1L7c-Rqfr2009YhBEdLgnz7xLrZo=" alt="">
    <div class="text-center font-bold">
      <h1>ISO 29110-4</h1>
      <h1>Version:2018</h1>
      <h1>Topic: System and software engineering -- Lifecycle profiles for very small antities (VSEs)</h1>
      <h1>The standard provides a set of re</h1>
    </div>
  </div>

  <div class="flex justify-end items-center gap-10">
    <div class="text-center font-bold">
      <h1>ISO 29110-4</h1>
      <h1>Version:2018</h1>
      <h1>Topic: System and software engineering -- Lifecycle profiles for very small antities (VSEs)</h1>
      <h1>The standard provides a set of re</h1>
    </div>
    <img class="w-72 rounded-xl" src="https://media.istockphoto.com/id/1400070880/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%9B%E0%B8%A5%E0%B8%AD%E0%B8%94%E0%B8%A0%E0%B8%B1%E0%B8%A2%E0%B9%83%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B9%8D%E0%B8%B2%E0%B8%87%E0%B8%B2%E0%B8%99-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%81%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99%E0%B8%AD%E0%B8%B8%E0%B8%9B%E0%B8%81%E0%B8%A3%E0%B8%93%E0%B9%8C%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%A1%E0%B8%B8%E0%B8%A1%E0%B8%A1%E0%B8%AD%E0%B8%87%E0%B8%94%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%89-%E0%B8%A7.jpg?s=612x612&w=0&k=20&c=QZp3qQ4ebgnC5-atKmKswDXnjTzqHCVcfAX1MyCvNfA=" alt="">
  </div>

  <div class="flex justify-start items-center gap-10">
    <img class="w-72 rounded-xl" src="https://media.istockphoto.com/id/1425406857/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99-iso-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%84%E0%B9%82%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B9%8D%E0%B8%B2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4.jpg?s=1024x1024&w=is&k=20&c=mS8Ml7NhgFzRvTr1L7c-Rqfr2009YhBEdLgnz7xLrZo=" alt="">
    <div class="text-center font-bold">
      <h1>ISO 29110-4</h1>
      <h1>Version:2018</h1>
      <h1>Topic: System and software engineering -- Lifecycle profiles for very small antities (VSEs)</h1>
      <h1>The standard provides a set of re</h1>
    </div>
  </div>

  <div class="flex justify-end items-center gap-10">
    <div class="text-center font-bold">
      <h1>ISO 29110-4</h1>
      <h1>Version:2018</h1>
      <h1>Topic: System and software engineering -- Lifecycle profiles for very small antities (VSEs)</h1>
      <h1>The standard provides a set of re</h1>
    </div>
    <img class="w-72 rounded-xl" src="https://media.istockphoto.com/id/1425406857/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99-iso-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%84%E0%B9%82%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B9%8D%E0%B8%B2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4.jpg?s=1024x1024&w=is&k=20&c=mS8Ml7NhgFzRvTr1L7c-Rqfr2009YhBEdLgnz7xLrZo=" alt="">
  </div>
</div>

@endsection
