@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="py-4 px-1 flex gap-4">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
    @include('pages.app_dashboard.components.sidebar')
  </div>
  
  <div class="w-full flex flex-col items-center">
    <div class="text-center w-full mb-4 flex justify-between px-10">
      <a href="{{url('/reservationhistory')}}" class="w-20 bg-blue-500 flex justify-center items-center rounded-lg">กลับ</a>
      <input type="text" value="{{$pendingTraining->status}}" id="status" class="text-center rounded-lg" disabled>
      <button class="bg-red-600 text-white py-1 px-1 rounded-lg">ดาวโหลด PDF</button>
    </div>
    <div class="bg-[#fff] w-4/5 p-6 pt-5 drop-shadow-2xl rounded-xl">
      <div class="items-center w-full mt-6 mb-6">
          <p class="text-gray-600 text-2xl font-ligth text-center">Request For Quote</p>
          <p class="text-gray-600 text-l text-center"> คำขอใบเสนอราคาการฝึกอบรม</p>
          <p class="text-gray-600 text-xl text-center">(In-house training)</p>
      </div>
      <hr class="mb-3">
  
      <p class="text-gray-600 text-xl font-ligth ">Issue to: </p>
      <p class="text-gray-600 text-l mb-4">ออกให้ </p>
      
      <div class="w-full mb-2">
          <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-address">Company</label>
          <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="company" value="{{$pendingTraining->company}}" type="text">
      </div>
      <div class="w-full mb-2">
          <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="address">Address</label>
          <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          id="address" type="text">{{$pendingTraining->address}}</textarea>
      </div>
  
      <div class="flex gap-4 mb-3">
          <div class="w-full md:w-1/2 mb-6 md:mb-0">
              <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="tax-id">Contact</label>
              <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white"
                  id="contact" value="{{$pendingTraining->contact}}" type="text">
          </div>
          <div class="w-full md:w-1/2">
              <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="position">Position</label>
              <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="position" value="{{$pendingTraining->position}}" type="text">
          </div>
      </div>
  
  
  
      <div class="flex gap-4 mb-3">
          <div class="w-full md:w-1/3 mb-6 md:mb-0">
              <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="phone">Phone</label>
              <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="phone" value="{{$pendingTraining->phone}}" maxlength="10" type="text">
          </div>
  
          <div class="w-full md:w-1/3 mb-4 md:mb-0">
              <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="email">E-mail</label>
              <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="email" value="{{$pendingTraining->email}}" type="email">
          </div>
  
          <div class="w-full md:w-1/3 mb-4 md:mb-0">
              <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="fax">Fax</label>
              <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="fax" value="{{$pendingTraining->fax}}" type="text">
          </div>
      </div>
  
      <div class="flex justify-between mt-3">
          <p class="text-gray-600 text-xl font-ligth ">Billing to: </p>
      </div>
      <!-- คัดลอกข้างบน -->
  
      <p class="text-gray-600 text-l mb-4">ออกใบเสร็จรับเงินให้ </p>
      <div class="flex flex-col mb-3 w-full">
          <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-company">Company</label>
          <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="bil-company" value="{{$pendingTraining->billingTo->bil_company}}" type="text">
      </div>
      <div class="flex flex-col mb-4 w-full">
          <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-address">Address</label>
          <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="bil-address" type=textarea>{{$pendingTraining->billingTo->bil_address}}</textarea>
      </div>
  
      <div class="flex gap-4 ">
          <div class="w-full md:w-1/3 mb-6 md:mb-0">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="tax-id">
                  Tax ID
              </label>
              <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white"
                  id="bil-tax-id" value="{{$pendingTraining->billingTo->bil_tax_id}}" type="text">
          </div>
          <div class="w-full">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-contact">
                  Contact
              </label>
              <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="bil-contact" value="{{$pendingTraining->billingTo->bil_contact}}" type="text">
          </div>
          <div class="w-full">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1"for="title">
                  Title
              </label>
              <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="bil-title" value="{{$pendingTraining->billingTo->bil_title}}" type="text">
          </div>
      </div>
  
  
  
      <div class="flex gap-4 mb-3">
          <div class="w-full">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-phone">
                  Phone
              </label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="bil-phone" value="{{$pendingTraining->billingTo->bil_phone}}" type="text" maxlength="10">
          </div>
          <div class="w-full">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-email">E-mail</label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="bil-email" value="{{$pendingTraining->billingTo->bil_email}}" type="email">
          </div>
          <div class="w-full">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="bil-fax">Fax</label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="bil-fax" value="{{$pendingTraining->billingTo->bil_fax}}" name="bil-fax" type="text">
          </div>
      </div>
  
      <p class="text-gray-600 text-xl font-ligth mt-5">Request for training course : </p>
      <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรที่ต้องการ </p>
      <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          id="training-reserve" type="text"  disabled>{{$pendingTraining->training_reserve}}</textarea>
      <div class="flex gap-4 mb-4 mt-4">
          <div class="w-full md:w-1/2 mb-6 md:mb-0">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="number-participants">
                  The number of participants
              </label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                  id="number-participants" name="number-participants" value="{{$pendingTraining->number_participants}}" type="number">
          </div>
          <div class="w-full md:w-1/2 ">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="date-reserve">
                  Requires date of training
              </label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="date-reserve" name="date-reserve" type="date" value="{{$pendingTraining->date_reserve}}">
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
                        <label class="block tracking-wide text-gray-700 text-sm font-light mb-2" for="other-course">
                            course
                        </label>
                        <input type="text" value="{{ $trainingCourseNames[$loop->index] }}" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                    <div class="w-full md:w-[37%] mb-6 md:mb-0">
                        <label class="block tracking-wide text-gray-700 text-sm font-light mb-2">
                            required date
                        </label>
                        <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="other-date-reserve" value="{{$otherTraining->other_date}}" type="date">
                    </div>
                </div>
            @endforeach
        @endif
      @endisset

      <p class="text-gray-600 text-xl font-ligth mt-5">Special requisition : </p>
      <p class="text-gray-600 text-l mb-4">ข้อเสนอหรือความต้องการพิเศษใด ๆ </p>
      <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          id="special-request" type="text">{{$pendingTraining->special_request}}</textarea>
  
      <p class="text-gray-600 text-xl font-ligth mt-4">ลงนาม : </p>
      <div class="flex gap-4">
          <div class="w-full md:w-1/2 md:mb-0">
              <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-city">
                  Name
              </label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="reserve-name" value="{{$pendingTraining->reserve_name}}" type="text">
          </div>
  
          <div class="w-full md:w-1/2 md:mb-0">
              <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-state">
                  Position
              </label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="reserve-position" value="{{$pendingTraining->reserve_position}}" type="text">
          </div>
          <div class="w-full md:w-1/2 md:mb-0">
              <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-city">
                  Mobile
              </label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="reserve-tel" value="{{$pendingTraining->reserve_tel}}" maxlength="10" type="text">
          </div>
  
          <div class="w-full md:w-1/2 md:mb-0">
              <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-state">
                  E-mail
              </label>
              <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="reserve-email" value="{{$pendingTraining->reserve_email}}" type="email">
          </div>
      </div>
    </div> {{-- endbox --}}
  </div>
</div>
@endsection
@section('scripts')
<script>
  console.log("gogo")
  let statusInput = document.querySelector('#status');
  let selectedValue = statusInput .value;

  console.log(selectedValue);
  getColor()
  function getColor() {

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
