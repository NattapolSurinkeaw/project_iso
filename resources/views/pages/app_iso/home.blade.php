@extends('layouts.main')
@section('meta-description','ISOConsult elerning - Your Source for Quality Products')
@section('meta-keywords', '')
@section('title', 'HomePage')

@section('content')
<swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" centered-slides="true" loop="true" autoplay-delay="2000" autoplay-disable-on-interaction="false">
  <swiper-slide>
    <img class="brightness-50 max-xs:h-[400px] h-[910px] w-full" src="/image/background/background.jpeg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px] max-xs:text-lg">In-house & On-line Learning!</h1>
      <h1 class="text-[60px] max-xs:text-xl text-orange-500 font-bold my-5">ISO CONSULTING & TRAINING</h1>
      <p class="max-xs:hidden">ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001, ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO22000, TL9000, Lean, Six Sigma,..etc.</p>
    </div>
  </swiper-slide>
  <swiper-slide>
    <img class="brightness-50 max-xs:h-[400px] h-[910px] w-full" src="/image/background/background.jpeg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px] max-xs:text-lg">ISO/QSEH consulting services!</h1>
      <h1 class="text-[60px] max-xs:text-xl text-orange-500 font-bold my-5">ISO DOCUMENTATION</h1>
      <p class="max-xs:hidden">We provide creating a comprehensive quality system and documentation both hard-paper and software.</p>
    </div>
  </swiper-slide>
  <swiper-slide>
    <img class="brightness-50 max-xs:h-[400px] h-[910px] w-full" src="/image/background/background.jpeg" alt="">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
      <h1 class="text-[30px] max-xs:text-lg">Online Learning Anytime, Anywhere!</h1>
      <h1 class="text-[60px] max-xs:text-xl text-orange-500 font-bold my-5">ELEARNING & ECONSULTING SERVICES</h1>
      <p class="max-xs:hidden">To support time management and effectiveness of implementation, we provide on-line consulting and training with low cost to our clients.</p>
    </div>
  </swiper-slide>
</swiper-container>

<!-- menu -->
<div id="menu" class="grid grid-cols-6 max-2xl:grid-cols-3 max-xs:grid-cols-1 gap-10 place-items-center p-4 mt-10">
  <a href="#signBoard">
    <div class="max-xs:w-[17rem] break-all flex items-center max-xs:justify-center gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-lg">
      <img class="w-14 h-14" src="image/icon/book.png" alt="">
      <div class="flex gap-2 flex-col justify-center font-normal">
        <h1 class="text-lg">ป้ายประชาสัมพันธ์</h1>
        <p>45,00</p>
      </div>
    </div>
  </a>

  <a href="#ourVideo">
    <div class="max-xs:w-[17rem] break-all flex items-center max-xs:justify-center gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-lg">
      <img class="w-14 h-14" src="image/icon/video.png" alt="">
      <div class="flex gap-2 flex-col justify-center font-normal">
        <h1 class="text-lg">วิดีโอแนะนำ</h1>
        <p>45,00</p>
      </div>
    </div>
  </a>

  <a href="#ourCourse">
    <div class="max-xs:w-[17rem] break-all flex items-center max-xs:justify-center gap-4 border px-7 py-2 bg-gray-200 rounded-lg shadow-lg">
      <img class="w-14 h-14" src="image/icon/book.png" alt="">
      <div class="flex gap-2 flex-col justify-center font-normal">
        <h1 class="text-lg">หลักสูตรของเรา</h1>
        <p>45,00</p>
      </div>
    </div>
  </a>

  <a href="#news">
    <div class="max-xs:w-[17rem] break-all flex items-center max-xs:justify-center gap-4 border px-6 py-2 bg-gray-200 rounded-lg shadow-lg">
      <img class="w-14 h-14" src="image/icon/audio.png" alt="">
      <div class="flex gap-2 flex-col justify-center font-normal">
        <h1 class="text-lg">ข่าวประชาสัมพันธ์</h1>
        <p>45,00</p>
      </div>
    </div>
  </a>

  <a href="#documents">
    <div class="max-xs:w-[17rem] break-all flex items-center max-xs:justify-center gap-4 border px-4 py-2 bg-gray-200 rounded-lg shadow-lg">
      <img class="w-14 h-14" src="image/icon/magazine.png" alt="">
      <div class="flex gap-2 flex-col justify-center font-normal">
        <h1 class="text-lg">เอกสารที่เผยแพร่</h1>
        <p>45,00</p>
      </div>
    </div>
  </a>

  <a href="#agencies">
    <div class="max-xs:w-[17rem] break-all flex items-center max-xs:justify-center gap-4 border px-4 py-2 bg-gray-200 rounded-lg shadow-lg">
      <img class="w-14 h-14" src="image/icon/video.png" alt="">
      <div class="flex gap-2 flex-col justify-center">
        <h1 class="text-lg">หน่วยงานที่เกี่ยวข้อง</h1>
        <p>45,00</p>
      </div>
    </div>
  </a>
</div>

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
<div data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out" class="my-20 mx-auto flex max-xs:flex-col w-10/12 overflow-hidden rounded-xl border drop-shadow h-[450px]">
  <div class="w-full p-5 overflow-y-scroll">
    <h1 class="text-4xl font-normal" style="font-family: 'Dancing Script', cursive;">WELCOME TO ISO CONSULT</h1>
    <hr class="my-1 w-2/12 border border-red-600" />
    <p class="mb-10 text-gray-500">The ISO consultant in Thailand</p>
    <p >ISO Consult.org เป็นที่ปรึกษาระบบมาตรฐานสากลที่ได้นำสิ่งใหม่ๆในระดับสากลซึ่งยอมรับกันทั่วโลกที่เหมาะสมกับองค์กรลูกค้ามาใช้งานเป็นการพัฒนาภายใต้ความมุ่งมั่นของการดำเนินการให้ประสบความสำเร็จตามแผนการดำเนินการเพื่อให้องค์กรลูกค้าสามารถแข่งขันได้ ที่ปรึกษาและวิทยากรที่ได้รับการคัดเลือกมาอย่างดีทั้งคุณวุฒิและประสบการณ์ในงานมากกว่า 20 ปี ผ่านการฝึกอบรมมากว่า 125 หลักสูตรทั้งในและต่างประเทศ ให้บริการลูกค้าในการจัดทำระบบมามากกว่า 60 โครงการ ทำให้เราได้รับความไว้วางใจในความสามารถจากลูกค้า การบริการของเราครอบคลุมการพัฒนาบุคลากรและระบบมาตรฐานในทุกส่วนงาน ทุกอุตสาหกรรมทั้ง อากาศยาน ยานยนต์ ปิโตรเลี่ยม การแพทย์ อาหารและยา เทคโนโลยีสารสนเทศ และอื่นๆ ทั้งภาครัฐและเอกชนเรามีผู้เชี่ยวชาญโดยเฉพาะ ด้วยหลักสูตรฝึกอบรมที่ทันสมัย มีรูปแบบการถ่ายทอดที่ทั้งแบบ on-line training (eLearning) และ on-site(In-house training) รวมทั้ง ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001(OHSAS), ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO/FSSC22000, TL9000, ISO31000, SA8000, ISO50001, ISO/TS22163 (IRIS), GMP/HACCP, Lean, Six Sigma, FAA, EASA, NADCAP, BRC, RTAC ... ซึ่งเราสรรหาสิ่งที่ดีที่สุดให้กับองค์กรลูกค้าเพื่อให้บรรลุซึ่งความต้องการเสมอ นอกจากภาษาไทยแล้วเราสามารถจัดทำเอกสารได้หลายภาษาทั้งภาษาอังกฤษ ญี่ปุ่น จีน และอื่นๆ เน้นให้สามารถนำไปประยุกต์และปฏิบัติได้จริงในธุรกิจทุกประเภท</p>
    <p >ISO Consult.org เป็นที่ปรึกษาระบบมาตรฐานสากลที่ได้นำสิ่งใหม่ๆในระดับสากลซึ่งยอมรับกันทั่วโลกที่เหมาะสมกับองค์กรลูกค้ามาใช้งานเป็นการพัฒนาภายใต้ความมุ่งมั่นของการดำเนินการให้ประสบความสำเร็จตามแผนการดำเนินการเพื่อให้องค์กรลูกค้าสามารถแข่งขันได้ ที่ปรึกษาและวิทยากรที่ได้รับการคัดเลือกมาอย่างดีทั้งคุณวุฒิและประสบการณ์ในงานมากกว่า 20 ปี ผ่านการฝึกอบรมมากว่า 125 หลักสูตรทั้งในและต่างประเทศ ให้บริการลูกค้าในการจัดทำระบบมามากกว่า 60 โครงการ ทำให้เราได้รับความไว้วางใจในความสามารถจากลูกค้า การบริการของเราครอบคลุมการพัฒนาบุคลากรและระบบมาตรฐานในทุกส่วนงาน ทุกอุตสาหกรรมทั้ง อากาศยาน ยานยนต์ ปิโตรเลี่ยม การแพทย์ อาหารและยา เทคโนโลยีสารสนเทศ และอื่นๆ ทั้งภาครัฐและเอกชนเรามีผู้เชี่ยวชาญโดยเฉพาะ ด้วยหลักสูตรฝึกอบรมที่ทันสมัย มีรูปแบบการถ่ายทอดที่ทั้งแบบ on-line training (eLearning) และ on-site(In-house training) รวมทั้ง ISO9001, ISO14001, AS9100/10/20, IATF16949, ISO45001(OHSAS), ISO13485, ISO15189, ISO17025, ISO22301, ISO27001, ISO/FSSC22000, TL9000, ISO31000, SA8000, ISO50001, ISO/TS22163 (IRIS), GMP/HACCP, Lean, Six Sigma, FAA, EASA, NADCAP, BRC, RTAC ... ซึ่งเราสรรหาสิ่งที่ดีที่สุดให้กับองค์กรลูกค้าเพื่อให้บรรลุซึ่งความต้องการเสมอ นอกจากภาษาไทยแล้วเราสามารถจัดทำเอกสารได้หลายภาษาทั้งภาษาอังกฤษ ญี่ปุ่น จีน และอื่นๆ เน้นให้สามารถนำไปประยุกต์และปฏิบัติได้จริงในธุรกิจทุกประเภท</p>
  </div>
  <img class="h-[470px] w-full max-2xl:w-1/2 max-xs:w-full max-xs:h-[200px] max-xs:order-first" src="/image/background/industry.jpg" alt="" />
</div>

<!-- วิดีโอของเรา -->
<div id="ourVideo"></div>
<div class="w-10/12 shadow-lg rounded-lg mx-auto p-4">
  <h1 class="text-center text-2xl font-normal">Our Video</h1>
  <div class="flex 2xl:justify-around my-5 gap-4 overflow-x-auto p-4" data-aos="flip-left" data-aos-duration="700" data-aos-easing="ease-in-out">
    @foreach($homeVideos as $homeVideo)
      <div class="w-64 flex flex-col justify-center items-center p-2 border hover:shadow-lg hover:shadow-red-300 rounded-lg ">
        <div id="getVideo" video-id="{{$homeVideo->id}}" class="w-60 overflow-hidden rounded-lg">
          <img class="w-60 h-40 duration-300 rounded-lg"src="{{$homeVideo->thumbnail}}" data-type={{$homeVideo->type_input}}>
        </div>
      </div>
    @endforeach
  </div>
</div>

<!-- The Modal -->
<div id="videoModal" class="modal hidden fixed inset-0 bg-black bg-opacity-70 flex justify-center items-center z-[11]">
  <div class="modal-content bg-white p-4 rounded-lg shadow-lg">
    <a id="close" class="flex absolute top-10 right-48 text-center text-4xl text-white hover:text-black cursor-pointer">X</a>
    <div id="box-video"></div>
  </div>
</div>

<!-- หลักสูตรของเรา  -->
<div id="ourCourse"></div>
<div class="flex flex-col gap-10 shadow-lg rounded-lg p-4 w-10/12 mx-auto mt-10 mb-4 overflow-hidden">
  <h1 class="text-center text-2xl font-normal">CHECK OUT THE HOT RELEASES</h1>
  <div class="xl:max-w-[70%] flex max-xs:flex-col justify-start items-center gap-5" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
    <img class="w-72 rounded-xl" src="https://media.istockphoto.com/id/1425406857/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99-iso-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%84%E0%B9%82%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B9%8D%E0%B8%B2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4.jpg?s=1024x1024&w=is&k=20&c=mS8Ml7NhgFzRvTr1L7c-Rqfr2009YhBEdLgnz7xLrZo=" alt="">
    <div class="max-xs:text-center">
      <h1>ISO 29110-4</h1>
      <h1>Version:2018</h1>
      <h1>Topic: System and software engineering -- Lifecycle profiles for very small antities (VSEs)</h1>
      <h1>The standard provides a set of re</h1>
    </div>
  </div>

  <div class="xl:max-w-[70%] ml-auto flex max-xs:flex-col justify-end items-center gap-5" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-out">
    <div class="text-right max-xs:text-center">
      <h1>ISO 29110-4</h1>
      <h1>Version:2018</h1>
      <h1>Topic: System and software engineering -- Lifecycle profiles for very small antities (VSEs)</h1>
      <h1>The standard provides a set of re</h1>
    </div>
    <img class="w-72 rounded-xl max-xs:order-first" src="https://media.istockphoto.com/id/1400070880/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%9B%E0%B8%A5%E0%B8%AD%E0%B8%94%E0%B8%A0%E0%B8%B1%E0%B8%A2%E0%B9%83%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B9%8D%E0%B8%B2%E0%B8%87%E0%B8%B2%E0%B8%99-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%81%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99%E0%B8%AD%E0%B8%B8%E0%B8%9B%E0%B8%81%E0%B8%A3%E0%B8%93%E0%B9%8C%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%A1%E0%B8%B8%E0%B8%A1%E0%B8%A1%E0%B8%AD%E0%B8%87%E0%B8%94%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%89-%E0%B8%A7.jpg?s=612x612&w=0&k=20&c=QZp3qQ4ebgnC5-atKmKswDXnjTzqHCVcfAX1MyCvNfA=" alt="">
  </div>

  <div class="xl:max-w-[70%] flex max-xs:flex-col justify-start items-center gap-5" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
    <img class="w-72 rounded-xl" src="https://media.istockphoto.com/id/1425406857/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99-iso-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%84%E0%B9%82%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B9%8D%E0%B8%B2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4.jpg?s=1024x1024&w=is&k=20&c=mS8Ml7NhgFzRvTr1L7c-Rqfr2009YhBEdLgnz7xLrZo=" alt="">
    <div class="max-xs:text-center">
      <h1>ISO 29110-4</h1>
      <h1>Version:2018</h1>
      <h1>Topic: System and software engineering -- Lifecycle profiles for very small antities (VSEs)</h1>
      <h1>The standard provides a set of re</h1>
    </div>
  </div>

  <div class="xl:max-w-[70%] ml-auto flex max-xs:flex-col justify-end items-center gap-5" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-out">
    <div class="text-right max-xs:text-center">
      <h1>ISO 29110-4</h1>
      <h1>Version:2018</h1>
      <h1>Topic: System and software engineering -- Lifecycle profiles for very small antities (VSEs)</h1>
      <h1>The standard provides a set of re</h1>
    </div>
    <img class="w-72 rounded-xl max-xs:order-first" src="https://media.istockphoto.com/id/1425406857/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99-iso-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B9%80%E0%B8%97%E0%B8%84%E0%B9%82%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B9%8D%E0%B8%B2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4.jpg?s=1024x1024&w=is&k=20&c=mS8Ml7NhgFzRvTr1L7c-Rqfr2009YhBEdLgnz7xLrZo=" alt="">
  </div>
</div>

<div id="news"></div>
<div class="flex flex-col gap-5 shadow-lg rounded-lg p-4 w-10/12 mx-auto mt-10 mb-4">
  <div class="flex justify-between">
    <h1 class="text-center text-xl">News and Event</h1>
    <a href="{{url('/newsandevent')}}" class="text-center text-blue-600 text-xl underline">more</a>
  </div>
  <div class="flex 2xl:justify-around gap-4 overflow-x-auto" data-aos="flip-right" data-aos-duration="700" data-aos-easing="ease-in-out">
    @foreach($homeNews as $news)
    <a href="{{url('/newsdetails')}}/{{$news->id}}">
      <div class="w-64 flex flex-col justify-center items-center p-2 border hover:shadow-lg hover:shadow-red-300 rounded-lg ">
        <div class="w-60 overflow-hidden rounded-lg">
          @if(!empty($news->img_news_events))
          <img class="w-60 h-40 duration-300 rounded-lg "
              src="{{$news->img_news_events}}" alt="">
          @else
          <img class="w-60 h-40 duration-300 rounded-lg "
              src="/image/icon/isologo.png" alt="">
          @endif
        </div>
          <h1 class="font-normal">{{$news->name}}</h1>
      </div>
    </a>
    @endforeach
  </div>
</div>

<div id="documents"></div>
<div class="flex flex-col gap-5 shadow-lg rounded-lg p-4 w-10/12 mx-auto mt-10 mb-4">
    <h1 class="text-center text-xl">เอกสารที่เผยแพร่</h1>
  <div class="flex 2xl:justify-around gap-4 overflow-x-auto">
    @foreach($homeDocuments as $doc)
    <a href="{{$doc->path}}" target="_bank">
      <div class="w-64 flex flex-col justify-center items-center p-2 border hover:shadow-lg hover:shadow-red-300 rounded-lg ">
        <div class="w-60 overflow-hidden rounded-lg">
          @if(!empty($doc->thumbnail))
          <img class="w-60 h-40 duration-300 rounded-lg "
              src="{{$doc->thumbnail}}" alt="">
          @else
          <img class="w-60 h-40 duration-300 rounded-lg "
              src="/image/icon/isologo.png" alt="">
          @endif
        </div>
          <h1 class="font-normal">{{$doc->name}}</h1>
      </div>
    </a>
    @endforeach
  </div>
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
    let videoFrame = document.getElementById('box-video');

    try {
      axios.get(`{{url('/')}}/api/getvideo/${videoId}`)
        .then(response => {
          console.log(response.data.data);
          const url = response.data.data;
          // let video = `<iframe id="videoFrame" width="1200" height="700" src="${url}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
          videoFrame.innerHTML = url;
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
      videoFrame.innerHTML = ''; // Clear the iframe content
    });

    // Close the modal when clicking outside of it
    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        modal.classList.add('hidden');
        videoFrame.innerHTML = ''; // Clear the iframe content
      }
    });
  }
</script>
@endsection