@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="pt-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
      @include('pages.app_dashboard.components.sidebar')
  </div>
  <div class="w-full bg-gray-100 rounded-lg p-4">
    <h1 class="text-xl font-bold text-center">Purchase Detail</h1>

    <div class="flex flex-col gap-4 mx-10 mt-4 p-4  bg-white rounded-lg drop-shadow-lg">
      <div class="flex gap-4 items-center">
        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
        <input type="text" value="{{$pendingCourse->name}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
      </div>

      <div class="flex gap-4">
        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
        <div class="flex flex-col gap-2 w-full">
        @foreach($courses as $course)
          <input type="text" value="{{$course->course_name}}"  name="username" id="username" autocomplete="username" class="w-full block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith" disabled>
        @endforeach
        </div>
      </div>

      <div class="grid grid-cols-2 gap-3">
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">เบอร์โทรผู้ซื้อ</label>
          <input type="text" value="{{$pendingCourse->customer_tel}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">จำนวนที่โอน</label>
          <input type="text" value="{{$pendingCourse->totalmoney}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">ราคาทั้งหมด</label>
          <input type="text" value="{{$pendingCourse->total_price}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">เลขบัญชีผู้ซื้อ</label>
          <input type="text" value="{{$pendingCourse->customer_banknumber}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">ธนาคารผู้ซื้อ</label>
          <input type="text" value="{{$pendingCourse->bankcustomer}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">ธนาคารบริษัท</label>
          <input type="text" value="{{$pendingCourse->bankcompany}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">การอนุมัติ</label>
          <input value="{{$pendingCourse->status}}" id="status" name="status" autocomplete="status" class="h-10 w-full text-center rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:leading-6" disabled>
        </div>
        
        <div class="flex gap-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">slip โอนเงิน</label>
          <img class="w-40 h-48" src="{{$pendingCourse->payment_slip}}" alt="">
        </div>
      </div>

      

      
    </div>

    <div class="mx-10 mt-4 bg-white p-4 rounded-lg drop-shadow-lg">
      <div class="flex flex-col">
        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Comment</label>
        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled></textarea>
      </div>
    </div>
    <div class="mx-10 mt-4">
      <a href="#" class="bg-green-600 text-white mt-3 px-3 py-1 rounded-lg">เริ่มเรียน</a>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  let statusInput = document.querySelector('#status');

  window.onload = function() {
  let selectedValue = statusInput.value;

  switch (selectedValue) {
    case 'pending':
      statusInput.classList.remove('bg-green-400', 'bg-red-400');
      statusInput.classList.add('bg-yellow-400');
      break;
    case 'approve':
      statusInput.classList.remove('bg-yellow-400', 'bg-red-400');
      statusInput.classList.add('bg-green-400');
      break;
    case 'reject':
      statusInput.classList.remove('bg-yellow-400', 'bg-green-400');
      statusInput.classList.add('bg-red-400');
      break;
    default:
      statusInput.classList.remove('bg-yellow-400', 'bg-green-400', 'bg-red-400');
  }
};
</script>
@endsection
