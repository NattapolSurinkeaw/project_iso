@extends('backend.layouts.main')
@section('title') Training @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Pending Course Detail</h1>
    </div>
    <div class="flex flex-col gap-4 mx-10 bg-white p-4 rounded-lg drop-shadow-lg">
      <div class="flex gap-4 items-center">
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
        <input type="text" value="{{$pendingcourse->name}}" name="name" id="name" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
      </div>

      <div class="flex gap-4">
        <label for="course" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
        <div class="flex flex-col gap-2 w-full">
        @foreach($courses as $course)
          <input type="text" value="{{$course->course_name}}"  name="course" id="course" class="w-full block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith" disabled>
        @endforeach
        </div>
      </div>

      <div class="grid grid-cols-2 gap-3">
        <div class="flex gap-4 items-center">
          <label for="customer-tel" class="block text-sm font-medium leading-6 text-gray-900">เบอร์โทรผู้ซื้อ</label>
          <input type="text" value="{{$pendingcourse->customer_tel}}" name="customer-tel" id="customer-tel" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="total-money" class="block text-sm font-medium leading-6 text-gray-900">จำนวนที่โอน</label>
          <input type="text" value="{{$pendingcourse->totalmoney}}" name="total-money" id="total-money" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="total-price" class="block text-sm font-medium leading-6 text-gray-900">ราคาทั้งหมด</label>
          <input type="text" value="{{$pendingcourse->total_price}}" name="total-price" id="total-price" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="customer-banknumber" class="block text-sm font-medium leading-6 text-gray-900">เลขบัญชีผู้ซื้อ</label>
          <input type="text" value="{{$pendingcourse->customer_banknumber}}" name="customer-banknumber" id="customer-banknumber" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="bank-customer" class="block text-sm font-medium leading-6 text-gray-900">ธนาคารผู้ซื้อ</label>
          <input type="text" value="{{$pendingcourse->bankcustomer}}" name="bank-customer" id="bank-customer" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="bank-company" class="block text-sm font-medium leading-6 text-gray-900">ธนาคารบริษัท</label>
          <input type="text" value="{{$pendingcourse->bankcompany}}" name="bank-company" id="bank-company" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">การอนุมัติ</label>
          <select id="status" name="status" autocomplete="status" class="h-10 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option value="pending" @if ($pendingcourse->status == 'pending') selected @endif>Pending</option>
            <option value="approve" @if ($pendingcourse->status == 'approve') selected @endif>Approve</option>
            <option value="reject" @if ($pendingcourse->status == 'reject') selected @endif>Reject</option>
          </select>
        </div>
        
        <div class="flex gap-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">slip โอนเงิน</label>
          <img class="w-40 h-48" src="{{$pendingcourse->payment_slip}}" alt="">
        </div>
      </div>

      

      
    </div>

    <div class="mx-10 mt-4 bg-white p-4 rounded-lg drop-shadow-lg">
      <div class="flex flex-col">
        <label for="comment" class="block text-sm font-medium leading-6 text-gray-900">Comment</label>
        <textarea id="comment" name="comment" rows="3" class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$pendingcourse->comment}}</textarea>
      </div>
    </div>
    <div class="mx-10">
      <button onclick="approvePending()" class="bg-green-600 text-white mt-3 px-3 py-1 rounded-lg">บันทึก</button>
    </div>
</div>


@endsection

@section('be-scripts')
{{-- @vite('resources/js/backend/global_overflow/main_overflow.js') --}}
<script>
let statusSelect = document.querySelector('#status');
let username = document.querySelector('#name').value;

window.onload = function() {
  var selectedOption = statusSelect.options[statusSelect.selectedIndex];
  var selectedValue = selectedOption.value;

  switch (selectedValue) {
    case 'pending':
      statusSelect.classList.remove('bg-green-400', 'bg-red-400');
      statusSelect.classList.add('bg-yellow-400');
      break;
    case 'approve':
      statusSelect.classList.remove('bg-yellow-400', 'bg-red-400');
      statusSelect.classList.add('bg-green-400');
      break;
    case 'reject':
      statusSelect.classList.remove('bg-yellow-400', 'bg-green-400');
      statusSelect.classList.add('bg-red-400');
      break;
    default:
      statusSelect.classList.remove('bg-yellow-400', 'bg-green-400', 'bg-red-400');
  }
};

statusSelect.addEventListener('change', function() {
    let selectedOption = statusSelect.options[statusSelect.selectedIndex];
    let selectedValue = selectedOption.value;

    switch (selectedValue) {
        case 'pending':
        statusSelect.classList.remove('bg-green-400', 'bg-red-400');
        statusSelect.classList.add('bg-yellow-400');
            break;
        case 'approve':
        statusSelect.classList.remove('bg-yellow-400', 'bg-red-400');
        statusSelect.classList.add('bg-green-400');
            break;
        case 'reject':
        statusSelect.classList.remove('bg-yellow-400', 'bg-green-400');
        statusSelect.classList.add('bg-red-400');
            break;
        default:
        statusSelect.classList.remove('bg-yellow-400', 'bg-green-400', 'bg-red-400');
    }
});

let pending = {!! json_encode($pendingcourse) !!}
console.log(pending.id);
// console.log(pending.total_courses);
function approvePending() {
  let comment = document.querySelector('#comment').value;
  let status = statusSelect.value
  let course = pending.total_courses
  let userId = pending.user_id
  let pen_id = pending.id
  param = {
    status: status,
    course: course,
    userId: userId,
    comment: comment,
  }
  console.log(param);
  Swal.fire({
    title: 'Approve Course',
    text: "ยืนยันการอนุมัติ",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'ยืนยัน',
    cancelButtonText: 'ยกเลิก',

    preConfirm: () => {
      param = {
        status: status,
        course: course,
        userId: userId,
        comment: comment,
      }

      return param;
    },
  }).then((result) => {
    if (result.isConfirmed) {
      axios.post(`/api/backend/approvecourse/${pen_id}`, result.value).then((response) => {
        console.log(response.data.status);
        if(response.data.status == "success") {
          Swal.fire(
            'Approve Course',
            'อนุมัติคำสั่งซื้อเรียบร้อย',
            'success'
          )
        }
      })
      
    }
  })
}

</script>

@endsection