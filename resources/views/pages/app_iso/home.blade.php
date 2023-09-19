@extends('layouts.main')
@section('title') HomePage @endsection
@section('content')

<swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" centered-slides="true" loop="true" autoplay-delay="2000" autoplay-disable-on-interaction="false">
  <swiper-slide>
    <img class="brightness-50 h-[941px] w-full" src="/image/background/background.jpeg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px]">In-house & On-line Learning!</h1>
      <h1 class="text-[60px] text-orange-500 font-bold my-5">ISO CONSULTING & TRAINING</h1>
      <p>ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001, ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO22000, TL9000, Lean, Six Sigma,..etc.</p>
    </div>
  </swiper-slide>
  <swiper-slide>
    <img class="brightness-50 h-[941px] w-full" src="/image/background/background.jpeg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px]">ISO/QSEH consulting services!</h1>
      <h1 class="text-[60px] text-orange-500 font-bold my-5">ISO DOCUMENTATION</h1>
      <p>We provide creating a comprehensive quality system and documentation both hard-paper and software.</p>
    </div>
  </swiper-slide>
  <swiper-slide>
    <img class="brightness-50 h-[941px] w-full" src="/image/background/background.jpeg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px]">Online Learning Anytime, Anywhere!</h1>
      <h1 class="text-[60px] text-orange-500 font-bold my-5">ELEARNING & ECONSULTING SERVICES</h1>
      <p>To support time management and effectiveness of implementation, we provide on-line consulting and training with low cost to our clients.</p>
    </div>
  </swiper-slide>
</swiper-container>

<!-- menu -->
<div id="menu" class="grid lg:grid-cols-6 md:grid-cols-3 sm:grid-cols-1 gap-10 place-items-center p-4 mt-10">
  <a href="#signBoard">
    <div class="flex items-center  gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-2xl">
      <img class="w-14 h-14" src="image/icon/book.png" alt="">
      <div class="flex gap-2 flex-col justify-center">
        <h1 class="text-lg font-medium">ป้ายประชาสัมพันธ์</h1>
        <p class="font-medium">45,00</p>
      </div>
    </div>
  </a>

  <a href="#ourVideo">
    <div class="flex items-center  gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-2xl">
      <img class="w-14 h-14" src="image/icon/video.png" alt="">
      <div class="flex gap-2 flex-col justify-center">
        <h1 class="text-lg font-medium">วิดีโอแนะนำ</h1>
        <p class="font-medium">45,00</p>
      </div>
    </div>
  </a>

  <a href="#ourCourse">
    <div class="flex items-center  gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-2xl">
      <img class="w-14 h-14" src="image/icon/book.png" alt="">
      <div class="flex gap-2 flex-col justify-center">
        <h1 class="text-lg font-medium">หลักสูตรของเรา</h1>
        <p class="font-medium">45,00</p>
      </div>
    </div>
  </a>

  <a href="#news">
    <div class="flex items-center  gap-4 border px-6 py-2 bg-gray-200 rounded-lg shadow-2xl">
      <img class="w-14 h-14" src="image/icon/audio.png" alt="">
      <div class="flex gap-2 flex-col justify-center">
        <h1 class="text-lg font-medium">ข่าวประชาสัมพันธ์</h1>
        <p class="font-medium">45,00</p>
      </div>
    </div>
  </a>

  <a href="#documents">
    <div class="flex items-center  gap-4 border px-4 py-2 bg-gray-200 rounded-lg shadow-2xl">
      <img class="w-14 h-14" src="image/icon/magazine.png" alt="">
      <div class="flex gap-2 flex-col justify-center">
        <h1 class="text-lg font-medium">เอกสารที่เผยแพร่</h1>
        <p class="font-medium">45,00</p>
      </div>
    </div>
  </a>

  <a href="#agencies">
    <div class="flex items-center  gap-4 border px-4 py-2 bg-gray-200 rounded-lg shadow-2xl">
      <img class="w-14 h-14" src="image/icon/video.png" alt="">
      <div class="flex gap-2 flex-col justify-center">
        <h1 class="text-lg font-medium">หน่วยงานที่เกี่ยวข้อง</h1>
        <p class="font-medium">45,00</p>
      </div>
    </div>
  </a>
</div>
{{-- @if (session('user'))
    <p>User: {{ session('user') }}</p>
@else
  <p>nodata</p>
@endif --}}
{{-- {{Auth::user()->name}} --}}
{{-- @dd($user) --}}
{{-- @dd($allSessions) --}}
{{-- @foreach ($allSessions as $key => $value)
    <p>{{ $key }}: {{ $value }}</p>
@endforeach --}}
{{-- @if($user)
  <h1>Mr => {{$user->email}}</h1>
@else 
  <h1>nodata</h1>
@endif --}}

<!-- ป้ายประชาสัมพันธ์ -->
<div id="signBoard"></div>
<div data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out" class="my-20 mx-auto flex w-10/12 overflow-hidden rounded-xl border drop-shadow h-[450px]">
  <div class="w-full p-5 overflow-y-scroll">
    <h1 class="text-4xl font-medium">WELCOME TO ISO CONSULT</h1>
    <hr class="my-1 w-2/12 border border-red-600" />
    <p class="mb-10 text-gray-500">The ISO consultant in Thailand</p>
    <p >ISO Consult.org เป็นที่ปรึกษาระบบมาตรฐานสากลที่ได้นำสิ่งใหม่ๆในระดับสากลซึ่งยอมรับกันทั่วโลกที่เหมาะสมกับองค์กรลูกค้ามาใช้งานเป็นการพัฒนาภายใต้ความมุ่งมั่นของการดำเนินการให้ประสบความสำเร็จตามแผนการดำเนินการเพื่อให้องค์กรลูกค้าสามารถแข่งขันได้ ที่ปรึกษาและวิทยากรที่ได้รับการคัดเลือกมาอย่างดีทั้งคุณวุฒิและประสบการณ์ในงานมากกว่า 20 ปี ผ่านการฝึกอบรมมากว่า 125 หลักสูตรทั้งในและต่างประเทศ ให้บริการลูกค้าในการจัดทำระบบมามากกว่า 60 โครงการ ทำให้เราได้รับความไว้วางใจในความสามารถจากลูกค้า การบริการของเราครอบคลุมการพัฒนาบุคลากรและระบบมาตรฐานในทุกส่วนงาน ทุกอุตสาหกรรมทั้ง อากาศยาน ยานยนต์ ปิโตรเลี่ยม การแพทย์ อาหารและยา เทคโนโลยีสารสนเทศ และอื่นๆ ทั้งภาครัฐและเอกชนเรามีผู้เชี่ยวชาญโดยเฉพาะ ด้วยหลักสูตรฝึกอบรมที่ทันสมัย มีรูปแบบการถ่ายทอดที่ทั้งแบบ on-line training (eLearning) และ on-site(In-house training) รวมทั้ง ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001(OHSAS), ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO/FSSC22000, TL9000, ISO31000, SA8000, ISO50001, ISO/TS22163 (IRIS), GMP/HACCP, Lean, Six Sigma, FAA, EASA, NADCAP, BRC, RTAC ... ซึ่งเราสรรหาสิ่งที่ดีที่สุดให้กับองค์กรลูกค้าเพื่อให้บรรลุซึ่งความต้องการเสมอ นอกจากภาษาไทยแล้วเราสามารถจัดทำเอกสารได้หลายภาษาทั้งภาษาอังกฤษ ญี่ปุ่น จีน และอื่นๆ เน้นให้สามารถนำไปประยุกต์และปฏิบัติได้จริงในธุรกิจทุกประเภท</p>
    <p >ISO Consult.org เป็นที่ปรึกษาระบบมาตรฐานสากลที่ได้นำสิ่งใหม่ๆในระดับสากลซึ่งยอมรับกันทั่วโลกที่เหมาะสมกับองค์กรลูกค้ามาใช้งานเป็นการพัฒนาภายใต้ความมุ่งมั่นของการดำเนินการให้ประสบความสำเร็จตามแผนการดำเนินการเพื่อให้องค์กรลูกค้าสามารถแข่งขันได้ ที่ปรึกษาและวิทยากรที่ได้รับการคัดเลือกมาอย่างดีทั้งคุณวุฒิและประสบการณ์ในงานมากกว่า 20 ปี ผ่านการฝึกอบรมมากว่า 125 หลักสูตรทั้งในและต่างประเทศ ให้บริการลูกค้าในการจัดทำระบบมามากกว่า 60 โครงการ ทำให้เราได้รับความไว้วางใจในความสามารถจากลูกค้า การบริการของเราครอบคลุมการพัฒนาบุคลากรและระบบมาตรฐานในทุกส่วนงาน ทุกอุตสาหกรรมทั้ง อากาศยาน ยานยนต์ ปิโตรเลี่ยม การแพทย์ อาหารและยา เทคโนโลยีสารสนเทศ และอื่นๆ ทั้งภาครัฐและเอกชนเรามีผู้เชี่ยวชาญโดยเฉพาะ ด้วยหลักสูตรฝึกอบรมที่ทันสมัย มีรูปแบบการถ่ายทอดที่ทั้งแบบ on-line training (eLearning) และ on-site(In-house training) รวมทั้ง ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001(OHSAS), ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO/FSSC22000, TL9000, ISO31000, SA8000, ISO50001, ISO/TS22163 (IRIS), GMP/HACCP, Lean, Six Sigma, FAA, EASA, NADCAP, BRC, RTAC ... ซึ่งเราสรรหาสิ่งที่ดีที่สุดให้กับองค์กรลูกค้าเพื่อให้บรรลุซึ่งความต้องการเสมอ นอกจากภาษาไทยแล้วเราสามารถจัดทำเอกสารได้หลายภาษาทั้งภาษาอังกฤษ ญี่ปุ่น จีน และอื่นๆ เน้นให้สามารถนำไปประยุกต์และปฏิบัติได้จริงในธุรกิจทุกประเภท</p>
  </div>
  <img class="h-[470px] w-full" src="https://images.unsplash.com/photo-1543599538-a6c4f6cc5c05?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="" />
</div>

<!-- วิดีโอของเรา -->
<div id="ourVideo"></div>
<div class="w-10/12 shadow-lg rounded-lg mx-auto p-14">
  <h1 class="text-center text-3xl">Our Video</h1>
  <div class="flex justify-center my-10 gap-5">
    @if(count($homeVideos) > 0)
    @foreach($homeVideos as $homeVideo)
      <div id="getVideo" video-id="{{$homeVideo->id}}" class="w-72 h-52">
        <img class="w-72 h-52 rounded-lg" src="{{$homeVideo->thumbnail}}" alt="">
        <!-- The Modal -->
        <div id="videoModal" class="modal hidden fixed inset-0 bg-black bg-opacity-70 flex justify-center items-center z-[11]">
          <div class="modal-content bg-white p-4 rounded-lg shadow-lg">
            <span id="close" class="flex absolute top-2 right-2 text-center text-5xl text-gray-400 hover:text-black cursor-pointer">&times;</span>
            <iframe id="videoFrame" width="1200" height="700" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    @endforeach
    @else
      no video
    @endif
    {{-- @php 
      $embed1 = \Embed::make('https://www.youtube.com/watch?v=qedG8ugiyFc')->parseUrl();
    @endphp

    <div class="">
      @php
        if ($embed1) {
          // Display the embed HTML in a div
          echo "<div class='video'>" . $embed1->getHtml() . "</div>";
      } else {
          // If provider is not found
          echo "Video not found.";
      }
      @endphp
    </div> --}}
    {{-- <div>
      <iframe src="https://drive.google.com/file/d/1kJiC7agiB23YQtIbVEhHW4eew-hcGCL9/preview" width="300" height="300" allow="autoplay"></iframe>
    </div>
    <div>
        <iframe src="https://drive.google.com/file/d/1_GcCKEaFWJXwoDA3gmTVM4dkvefsI67B/preview" width="300" height="300" allow="autoplay"></iframe>
    </div> --}}
  </div>
</div>

<!-- หลักสูตรของเรา  -->
<div id="ourCourse"></div>
<div class="flex flex-col gap-5 shadow-lg rounded-lg p-4 w-10/12 mx-auto mt-10 mb-4">
  <h1 class="text-center text-2xl font-medium">CHECK OUT THE HOT RELEASES</h1>
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

<div id="news"></div>
<div class="flex flex-col gap-5 shadow-lg rounded-lg p-4 w-10/12 mx-auto mt-10 mb-4">
  <div class="flex justify-between">
    <h1 class="text-center text-xl">News and Event</h1>
    <a href="{{url('/newsandevent')}}" class="text-center text-blue-600 text-xl underline">more</a>
  </div>
  <div class="flex justify-around gap-4">
    @foreach($homeNews as $news)
    <a href="{{url('/newsdetails')}}/{{$news->id}}">
      <div class="w-64 flex flex-col justify-center items-center p-2 border rounded-lg">
        <div class="w-60 h-40 overflow-hidden rounded-lg">
          @if(!empty($news->img_news_events))
          <img class="w-60 h-40 hover:scale-125 duration-300 rounded-lg" src="{{$news->img_news_events}}" alt="">
          @else
          <img class="w-60 h-40 hover:scale-125 duration-300 rounded-lg" src="/image/icon/isologo.png" alt="">
          @endif
        </div>
        <h1 class="font-bold">{{$news->name}}</h1>
        <p>{{$news->description}}</p>
      </div>
    </a>
    @endforeach
  </div>
</div>

<div id="documents"></div>
<div class="flex flex-col gap-5 shadow-lg rounded-lg p-4 w-10/12 mx-auto mt-10 mb-4">
  <h1>เอกสารที่เผยแพร่</h1>
</div>

<div id="agencies"></div>
<div class="flex flex-col gap-5 shadow-lg rounded-lg p-4 w-10/12 mx-auto mt-10 mb-4">
  <h1>หน่วยงานที่เกี่ยวข้อง</h1>
  <p>ISOConsult.org</p>
</div>

@endsection

@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
  const menuItems = document.querySelectorAll('#menu a');

  menuItems.forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      const targetBoxId = this.getAttribute('href');
      const targetBox = document.querySelector(targetBoxId);

      if (targetBox) {
        // Scroll to the target box smoothly
        targetBox.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
});

  const btnVideo = document.querySelectorAll('#getVideo')

  btnVideo.forEach(btnVideo => {
    btnVideo.addEventListener('click', () => {
      const videoId = btnVideo.getAttribute('video-id');
      getVideo(videoId)
    });
  });
  
  function getVideo(videoId) {
    // console.log(videoId)
    let modal = document.getElementById('videoModal');
    let videoFrame = document.getElementById('videoFrame');

    try {
      axios.get(`{{url('/')}}/api/getvideo/${videoId}`)
        .then(response => {
          // console.log(response.data.data['url']);
          const url = response.data.data['url'];
          videoFrame.src = url;
        })
        .catch(error => {
          console.log(error);
        });
    } catch (error) {
      console.log(error);
    }

    // Show the modal
    modal.classList.remove('hidden');

    // Close the modal when the "close" button is clicked
    const closeButton = document.querySelector('#close');
    closeButton.addEventListener('click', function(event) {
      event.stopPropagation(); // หยุด event propagation
      modal.classList.add('hidden');
      videoFrame.src = ''; // Clear the iframe source
    });

    // Close the modal when clicking outside of it
    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        modal.classList.add('hidden');
        videoFrame.src = ''; // Clear the iframe source
      }
    });
  }
</script>
@endsection