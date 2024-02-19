@extends('backend.layouts.main')
@section('title') PendingTrainingDetail @endsection
@section('container')

<div class="">
  <div class="text-center w-full my-4 flex justify-between px-10">
    <a href="{{url('/backend/pendingtraining')}}" class="w-20 bg-blue-500 text-white flex justify-center items-center rounded-lg">กลับ</a>
    <select id="status" name="status" autocomplete="status" class="h-10 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
      <option value="pending" @if ($pendingTraining->status == 'pending') selected @endif>Pending</option>
      <option value="approve" @if ($pendingTraining->status == 'approve') selected @endif>Approve</option>
      <option value="reject" @if ($pendingTraining->status == 'reject') selected @endif>Reject</option>
    </select>
    <a href="/quotation/{{$pendingTraining->id}}" class="bg-red-600 text-white py-1 px-1 rounded-lg flex items-center">ดาวโหลด PDF</a>
    <button class="bg-green-600 text-white py-1 px-4 rounded-lg hidden" id="btnSave" onclick="editpending()">บันทึก</button>
  </div>
  <div class="mx-10 flex flex-col items-center">
    <div class="bg-[#fff] w-4/5 p-6 pt-5 drop-shadow-2xl rounded-xl">
      <div class="items-center w-full mt-6 mb-6">
        <p class="text-gray-600 text-2xl font-ligth text-center">Request For Quote</p>
        <p class="text-gray-600 text-l text-center"> คำขอใบเสนอราคาการฝึกอบรม</p>
        <p class="text-gray-600 text-xl text-center">(In-house training)</p>
      </div>
      <hr class="mb-3">
  
      <p class="text-gray-600 text-xl font-ligth ">Issue to: </p>
      <p class="text-gray-600 text-l mb-4">ออกให้ </p>
      
      <div class="flex gap-4 w-full mb-2">
        <div class="w-full">
          <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-address">Company</label>
          <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  focus:outline-none focus:bg-white focus:border-gray-500" id="company" value="{{$pendingTraining->company}}" type="text" disabled>
        </div>

        <div class="w-full">
          <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-address">Branch</label>
          <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  focus:outline-none focus:bg-white focus:border-gray-500" id="branch" type="text" value="{{$pendingTraining->branch}}" maxlength="5" disabled>
        </div>
      </div>
      <div class="w-full mb-2">
        <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="address">Address</label>
        <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  focus:outline-none focus:bg-white focus:border-gray-500"
        id="address" type="text" disabled>{{$pendingTraining->address}}</textarea>
      </div>
  
      <div class="flex gap-4 mb-3">
          <div class="w-full md:w-1/2 mb-6 md:mb-0">
            <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="tax-id">Contact</label>
            <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white"
                id="contact" value="{{$pendingTraining->contact}}" type="text" disabled>
          </div>
          <div class="w-full md:w-1/2">
            <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="position">Position</label>
            <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                id="position" value="{{$pendingTraining->position}}" type="text" disabled>
          </div>
      </div>
  
  
  
      <div class="flex gap-4 mb-3">
          <div class="w-full md:w-1/3 mb-6 md:mb-0">
            <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="phone">Phone</label>
            <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                id="phone" value="{{$pendingTraining->phone}}" maxlength="10" type="text" disabled>
          </div>
  
          <div class="w-full md:w-1/3 mb-4 md:mb-0">
            <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="email">E-mail</label>
            <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                id="email" value="{{$pendingTraining->email}}" type="email" disabled>
          </div>
  
          <div class="w-full md:w-1/3 mb-4 md:mb-0">
            <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="fax">Fax</label>
            <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                id="fax" value="{{$pendingTraining->fax}}" type="text" disabled>
          </div>
      </div>
  
      <div class="flex justify-between mt-3">
        <p class="text-gray-600 text-xl font-ligth ">Billing to: </p>
      </div>
      <!-- คัดลอกข้างบน -->
  
      <p class="text-gray-600 text-l mb-4">ออกใบเสร็จรับเงินให้ </p>
      <div class="flex gap-4">
        <div class="flex flex-col mb-3 w-full">
          <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-company">Company</label>
          <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500" id="bil-company" value="{{$pendingTraining->billingTo->bil_company}}" type="text" disabled>
        </div>
        <div class="flex flex-col mb-3 w-full">
          <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-company">Branch</label>
          <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500" id="bil-company" value="{{$pendingTraining->billingTo->bil_branch}}" type="text" disabled>
        </div>
      </div>
      <div class="flex flex-col mb-4 w-full">
        <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-address">Address</label>
        <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
            id="bil-address" type="text" disabled>{{$pendingTraining->billingTo->bil_address}}</textarea>
      </div>
  
      <div class="flex gap-4 ">
          <div class="w-full md:w-1/3 mb-6 md:mb-0">
            <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="tax-id">Tax ID</label>
            <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white"
              id="bil-tax-id" value="{{$pendingTraining->billingTo->bil_tax_id}}" type="text" disabled>
          </div>
          <div class="w-full">
            <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-contact">Contact</label>
            <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="bil-contact" value="{{$pendingTraining->billingTo->bil_contact}}" type="text" disabled>
          </div>
          <div class="w-full">
            <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1"for="title">Title</label>
            <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="bil-title" value="{{$pendingTraining->billingTo->bil_title}}" type="text" disabled>
          </div>
      </div>
  
  
  
      <div class="flex gap-4 mb-3">
          <div class="w-full">
            <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-phone">Phone</label>
            <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="bil-phone" value="{{$pendingTraining->billingTo->bil_phone}}" type="text" maxlength="10" disabled>
          </div>
          <div class="w-full">
            <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-email">E-mail</label>
            <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="bil-email" value="{{$pendingTraining->billingTo->bil_email}}" type="email" disabled>
          </div>
          <div class="w-full">
            <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="bil-fax">Fax</label>
            <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="bil-fax" value="{{$pendingTraining->billingTo->bil_fax}}" name="bil-fax" type="text" disabled>
          </div>
      </div>
  
      <p class="text-gray-600 text-xl font-ligth mt-5">Request for training course : </p>
      <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรที่ต้องการ </p>
      <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 focus:outline-none focus:bg-white focus:border-gray-500"
        id="training-reserve" type="text"  disabled>{{$pendingTraining->training_reserve}}</textarea>
      <div class="flex gap-4 mb-4 mt-4">
        <div class="w-full md:w-1/2 mb-6 md:mb-0">
          <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="number-participants">
            The number of participants
          </label>
          <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 focus:outline-none focus:bg-white"
            id="number-participants" name="number-participants" value="{{$pendingTraining->number_participants}}" type="number" disabled>
        </div>
        <div class="w-full md:w-1/2 ">
          <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="date-reserve">Requires date of training</label>
          <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
            id="date-reserve" name="date-reserve" type="date" value="{{$pendingTraining->date_reserve}}" disabled>
        </div>
      </div>
  
      @isset($pendingTraining->otherTrainings)
        @if(!$pendingTraining->otherTrainings->isEmpty())
            <h1 class="text-gray-600 text-xl font-light mt-5">Request for other courses :</h1>
            <div class="flex justify-between">
              <!-- ปุ่มเพิ่ม course -->
              <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรอื่น ๆ (หากมี) </p>
            </div>
            @foreach($pendingTraining->otherTrainings as $otherTraining)
              <div class="flex justify-between gap-4 mb-2">
                <div class="w-full md:w-0 mx-3 mb-6 md:mb-0 mt-5">
                  <input id="check-reserve" type="checkbox" class="w-5 h-10 text-blue-600 bg-gray-100 border-gray-300 rounded" checked>
                </div>
                <div class="w-full md:w-3/5 mb-6 md:mb-0">
                  <label class="block tracking-wide text-gray-700 text-sm font-light mb-2" for="other-course">course</label>
                  <input type="text" value="{{ $trainingCourseNames[$loop->index] }}" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 focus:outline-none focus:bg-white" disabled>
                </div>
                <div class="w-full md:w-[37%] mb-6 md:mb-0">
                  <label class="block tracking-wide text-gray-700 text-sm font-light mb-2">required date </label>
                  <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-2 focus:outline-none focus:bg-white focus:border-gray-500" id="other-date-reserve" value="{{$otherTraining->other_date}}" type="date" disabled>
                </div>
              </div>
            @endforeach
        @endif
      @endisset
  
      <p class="text-gray-600 text-xl font-ligth mt-5">Special requisition : </p>
      <p class="text-gray-600 text-l mb-4">ข้อเสนอหรือความต้องการพิเศษใด ๆ </p>
      <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 focus:outline-none focus:bg-white focus:border-gray-500"
          id="special-request" type="text" disabled>{{$pendingTraining->special_request}}</textarea>
  
      <p class="text-gray-600 text-xl font-ligth mt-4">ลงนาม : </p>
      <div class="flex gap-4">
          <div class="w-full md:w-1/2 md:mb-0">
            <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-city">Name</label>
            <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="reserve-name" value="{{$pendingTraining->reserve_name}}" type="text" disabled>
          </div>
  
          <div class="w-full md:w-1/2 md:mb-0">
            <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-state">Position</label>
            <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="reserve-position" value="{{$pendingTraining->reserve_position}}" type="text" disabled>
          </div>
          <div class="w-full md:w-1/2 md:mb-0">
            <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-city">Mobile</label>
            <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="reserve-tel" value="{{$pendingTraining->reserve_tel}}" maxlength="10" type="text" disabled>
          </div>
  
          <div class="w-full md:w-1/2 md:mb-0">
            <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-state">E-mail</label>
            <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
              id="reserve-email" value="{{$pendingTraining->reserve_email}}" type="email" disabled>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('be-scripts')
{{-- @vite('resources/js/backend/global_overflow/main_overflow.js') --}}
<script>
  let selectStatus = document.querySelector('#status');
  let btnSave = document.querySelector('#btnSave');
  selectStatus.addEventListener('change', () => {
    btnSave.classList.remove('hidden');
  })

  function editpending() {
    const pedId = {!! $pendingTraining->id !!}

    param = {
      status : selectStatus.value
    }
    console.log(param)
    axios.post(`/api/backned/updatependingtrain/${pedId}`, param).then((response) => {
      console.log(response.data.status);
      if(response.data.status == 'success') {
        btnSave.classList.add('hidden');
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1000
        })
      }
    })
  }

  window.onload = function() {
  var selectedOption = selectStatus.options[selectStatus.selectedIndex];
  var selectedValue = selectedOption.value;

  switch (selectedValue) {
    case 'pending':
      selectStatus.classList.remove('bg-green-400', 'bg-red-400');
      selectStatus.classList.add('bg-yellow-400');
      break;
    case 'approve':
      selectStatus.classList.remove('bg-yellow-400', 'bg-red-400');
      selectStatus.classList.add('bg-green-400');
      break;
    case 'reject':
      selectStatus.classList.remove('bg-yellow-400', 'bg-green-400');
      selectStatus.classList.add('bg-red-400');
      break;
    default:
      selectStatus.classList.remove('bg-yellow-400', 'bg-green-400', 'bg-red-400');
  }
};

selectStatus.addEventListener('change', function() {
    let selectedOption = selectStatus.options[selectStatus.selectedIndex];
    let selectedValue = selectedOption.value;

    switch (selectedValue) {
        case 'pending':
        selectStatus.classList.remove('bg-green-400', 'bg-red-400');
        selectStatus.classList.add('bg-yellow-400');
            break;
        case 'approve':
        selectStatus.classList.remove('bg-yellow-400', 'bg-red-400');
        selectStatus.classList.add('bg-green-400');
            break;
        case 'reject':
        selectStatus.classList.remove('bg-yellow-400', 'bg-green-400');
        selectStatus.classList.add('bg-red-400');
            break;
        default:
        selectStatus.classList.remove('bg-yellow-400', 'bg-green-400', 'bg-red-400');
    }
});
</script>
@endsection