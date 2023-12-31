@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="py-4 px-1 gap-4 flex max-xs:flex-col">
  @include('pages.app_dashboard.components.sidebar')

  <div class="w-full bg-gray-100 rounded-lg p-4">
    <h1 class="text-2xl font-medium text-center">Purchase Detail</h1>

    <div class="flex flex-col gap-4 mx-10 mt-4 p-4  bg-white rounded-lg drop-shadow-lg">
      <div class="flex gap-4 items-center">
        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
        <input type="text" value="{{$pendingCourse->name}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
      </div>

      <div class="flex gap-4">
        <label for="course" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
        <div class="flex flex-col gap-2 w-full">
          {{-- @dd($courses) --}}
        @foreach($courses as $course)
          <div class="flex gap-4">
            <input type="text" value="{{$course->course_name}}"  name="course" id="course" class="w-full block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 col-span-4"disabled>
            <a id="start-learn" class="w-20 flex justify-center items-center bg-green-500 text-white rounded-lg" href="{{ url('/course/'.$course->id) }}">เริ่มเรียน</a>
          </div>
        @endforeach
        </div>
      </div>

      <div class="grid grid-cols-2 gap-3">
        <div class="flex gap-4 items-center">
          <label for="tel" class="block text-sm font-medium leading-6 text-gray-900">เบอร์โทรผู้ซื้อ</label>
          <input type="text" value="{{$pendingCourse->customer_tel}}" name="tel" id="tel" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="totalmoney" class="block text-sm font-medium leading-6 text-gray-900">จำนวนที่โอน</label>
          <input type="text" value="{{$pendingCourse->totalmoney}}" name="totalmoney" id="totalmoney" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="total-price" class="block text-sm font-medium leading-6 text-gray-900">ราคาทั้งหมด</label>
          <input type="text" value="{{$pendingCourse->total_price}}" name="total-price" id="total-price" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="bank-number" class="block text-sm font-medium leading-6 text-gray-900">เลขบัญชีผู้ซื้อ</label>
          <input type="text" value="{{$pendingCourse->customer_banknumber}}" name="bank-number" id="bank-number" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="customer-bank" class="block text-sm font-medium leading-6 text-gray-900">ธนาคารผู้ซื้อ</label>
          <input type="text" value="{{$pendingCourse->bankcustomer}}" name="customer-bank" id="customer-bank" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="bank-company" class="block text-sm font-medium leading-6 text-gray-900">ธนาคารบริษัท</label>
          <input type="text" value="{{$pendingCourse->bankcompany}}" name="bank-company" id="bank-company" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">การอนุมัติ</label>
          <input value="{{$pendingCourse->status}}" id="status" name="status" class="h-10 w-full text-center rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:leading-6" disabled>
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
        <textarea id="about" name="about" rows="3" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>{{$pendingCourse->comment}}</textarea>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  let statusInput = document.querySelector('#status');
  let start_learn = document.querySelectorAll('#start-learn');


  
  let selectedValue = statusInput.value;
  console.log(selectedValue); // แก้ไขเป็น console.log(selectedValue);

  switch (selectedValue) {
    case 'pending':
      statusInput.classList.remove('bg-green-400', 'bg-red-400');
      statusInput.classList.add('bg-yellow-400');

      hiddenElearn();
      break;
    case 'approve':
      statusInput.classList.remove('bg-yellow-400', 'bg-red-400');
      statusInput.classList.add('bg-green-400');
      break;
    case 'reject':
      statusInput.classList.remove('bg-yellow-400', 'bg-green-400');
      statusInput.classList.add('bg-red-400');
      
      hiddenElearn();
      break;
    default:
      statusInput.classList.remove('bg-yellow-400', 'bg-green-400', 'bg-red-400');
      hiddenElearn();
  }

  function hiddenElearn() {
    start_learn.forEach(element => {
      element.classList.add('hidden');
    });
  }
</script>
@endsection
