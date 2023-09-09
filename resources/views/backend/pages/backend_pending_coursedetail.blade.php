@extends('backend.layouts.main')
@section('title') Training @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Pending Course Detail</h1>
    </div>
    <div class="flex flex-col gap-4 mx-10 bg-white p-4 rounded-lg drop-shadow-lg">
      <div class="flex gap-4 items-center">
        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
        <input type="text" value="{{$pendingcourse->name}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
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
          <input type="text" value="{{$pendingcourse->customer_tel}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">จำนวนที่โอน</label>
          <input type="text" value="{{$pendingcourse->totalmoney}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">ราคาทั้งหมด</label>
          <input type="text" value="{{$pendingcourse->total_price}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">เลขบัญชีผู้ซื้อ</label>
          <input type="text" value="{{$pendingcourse->customer_banknumber}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">ธนาคารผู้ซื้อ</label>
          <input type="text" value="{{$pendingcourse->bankcustomer}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
        </div>
  
        <div class="flex gap-4 items-center">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">ธนาคารบริษัท</label>
          <input type="text" value="{{$pendingcourse->bankcompany}}" name="username" id="username" class="block flex-1 border rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" disabled>
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
        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Comment</label>
        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
      </div>
    </div>
    <div class="mx-10">
      <button onclick="approvePending()" class="bg-green-600 text-white mt-3 px-3 py-1 rounded-lg">บันทึก</button>
    </div>
</div>


@endsection

@section('be-scripts')
<script>

let statusSelect = document.querySelector('#status');
let username = document.querySelector('#username').value;

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
console.log(pending);
console.log(pending.total_courses);
function approvePending() {
  let status = statusSelect.value
  let course = pending.total_courses
  let userId = pending.user_id
  param = {
    status: status,
    course: course,
    userId: userId,
  }
  console.log(param)
}
// document.getElementById('toggleTable').addEventListener('click', function() {
//     let tableDiv = document.getElementById('table-train');
//     let calendarDiv = document.getElementById('calendar-train');
//     if (tableDiv.style.display === 'none' || tableDiv.style.display === '') {
//         tableDiv.style.display = 'block';
//         calendarDiv.style.display = 'none';
//     }
// });

// document.getElementById('toggleCalendar').addEventListener('click', function() {
//     let calendarDiv = document.getElementById('calendar-train');
//     let tableDiv = document.getElementById('table-train');
//     if (calendarDiv.style.display === 'none' || calendarDiv.style.display === '') {
//         calendarDiv.style.display = 'block';
//         tableDiv.style.display = 'none';
//     }
//     let calendarEl = document.querySelector('#calendar');
//     let calendar = new FullCalendar.Calendar(calendarEl, {
//         // กำหนดค่าต่าง ๆ ของปฏิทินที่นี่
//     });
//     calendar.render();
// });


// function delTraining(train_id) {
//     Swal.fire({
//     title: 'Are you sure?',
//     text: "You won't be able to revert this!",
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonColor: '#3085d6',
//     cancelButtonColor: '#d33',
//     confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//     if (result.isConfirmed) {
//         axios.delete(`/api/backend/deltrain/${train_id}`).then((result) => {
//             console.log(result.status);
//             if(result.status = 'success') {
//                 Swal.fire(
//                 'Deleted!',
//                 'Your file has been deleted.',
//                 'success'
//                 ).then(() => { location.reload();})
//             }
//         })
//     }
//     })
// }

</script>

@endsection