@extends('layouts.main')
@section('title') CartPage @endsection
@section('content')
  <div class="w-10/12 mt-10 mx-auto border rounded-xl shadow-md">
    <h1 class="text-3xl text-center font-bold my-4">รายละเอียดคำสั่งซื้อ</h1>
    <hr>

    <div class="flex p-4 gap-4">
      <div class="w-full p-4">
        <div class="p-10">
          @if(count($cartCourses) > 0)
          @foreach ($cartCourses as $course)
          <div class="flex justify-around p-5">
            <h1>{{$course->course_name}}</h1>
            <h1>{{number_format($course->price, 2)}}</h1>
          </div>
          @endforeach
          @endif
        </div>
        @if(count($cartCourses) > 0)
          @php
            $totalPrice = 0; // เก็บราคาทั้งหมด
          @endphp
          @foreach($cartCourses as $course)
            @php
              $totalPrice += floatval($course->price); // เพิ่มราคาลงใน totalPrice
            @endphp
          @endforeach
          <h1 class="text-3xl text-center font-bold my-4">ยอดชำระ  <span class="text-xl font-normal line-through text-gray-400">{{ number_format($totalPrice, 2) }}</span> {{ number_format((isset($cartList['discount']->code)) ? ($totalPrice - (($totalPrice * $cartList['discount']->discount) / 100)) : $totalPrice,2) }}  THB</h1>
        @else
          <h1 class="text-3xl text-center font-bold my-4">ยอดชำระ 0.00 THB</h1>
        @endif

          <hr>
          <h1 class="text-xl text-center my-10">ชื่อ บริษัท ISOconsult.org</h1>
          <div class="flex flex-col items-center gap-5">
            <div class="flex items-center bg-gray-300 rounded-full drop-shadow-lg">
              <img class="h-14 w-14 rounded-full" src="/image/icon/KBANK.png" alt="">
              <h1 class="px-10 text-xl font-bold">5422065818</h1>
            </div>
            <div class="flex items-center bg-gray-300 rounded-full drop-shadow-lg">
              <img class="h-14 w-14 rounded-full" src="image/icon/krung.webp" alt="">
              <h1 class="px-10 text-xl font-bold">0240455568</h1>
            </div>
          </div>
      </div>

      <div class="border-l-4 border-indigo-500"></div>
      
      <div class="w-full p-4">
        <h1 class="text-xl text-center">ข้อมูลผู้สั่งซื้อ</h1>

        <div class="grid grid-cols-2 gap-4">
          <div class="flex flex-col gap-4">
            <div class="flex flex-col">
              <label for="" class="block text-sm font-medium leading-6 text-gray-900 text-[17px] mb-2">ชื่อ - นามสกุลบัญชีผู้ซื้อ</label>
              <input name="cumtomer-name" id="cumtomer-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text">
            </div>
  
            <div class="flex flex-col">
              <label for="" class="block text-sm font-medium leading-6 text-gray-900 text-[17px] mb-2">เลขบัญชีผู้ซื้อ</label>
              <input name="bank-number" id="bank-number" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text">
            </div>
  
            <div class="flex flex-col">
              <label for="" class="block text-sm font-medium leading-6 text-gray-900 text-[17px] mb-2">จำนวนเงินที่โอน</label>
              <input name="totalmoney" id="totalmoney" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" placeholder="9,999" maxlength="7">
            </div>

            <div class="flex flex-col">
              <label for="" class="block text-sm font-medium leading-6 text-gray-900 text-[17px] mb-2">วันที่โอน</label>
              <input name="date-transfer" id="date-transfer" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="datetime-local">
            </div>
          </div>

          <div class="flex flex-col gap-4">
            <div class="flex flex-col">
              <label for="" class="block text-sm font-medium leading-6 text-gray-900 text-[17px] mb-2">เบอร์โทร</label>
              <input id="customer-tel" name="customer-tel" type="tel" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" maxlength="10" placeholder="กรอกเบอร์โทรศัพท์">
            </div>
  
            <div class="flex flex-col">
              <label for="" class="block text-sm font-medium leading-6 text-gray-900 text-[17px] mb-2">บัญชีธนาคารผู้ซื้อ</label>
              <select name="bank-customer" id="bank-customer" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
                <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                <option value="ธนาคารเกียรตินาคินภัทร">ธนาคารเกียรตินาคินภัทร</option>
                <option value="ธนาคารซีไอเอ็มบีไทย">ธนาคารซีไอเอ็มบีไทย</option>
                <option value="ธนาคารทิสโก้">ธนาคารทิสโก้</option>
                <option value="ธนาคารแลนด์แอนด์เฮ้าส์">ธนาคารแลนด์ แอนด์ เฮ้าส์</option>
                <option value="ธนาคารไทยเครดิตเพื่อรายย่อย">ธนาคารไทยเครดิตเพื่อรายย่อย</option>
                <option value="ธนาคารไอซีบีซี(ไทย)">ธนาคารไอซีบีซี (ไทย)</option>
                <option value="ธนาคารอาคารสงเคราะห์">ธนาคารอาคารสงเคราะห์</option>
                <option value="ธนาคารพัฒนาวิสาหกิจขนาดกลางฯลฯ">ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย</option>
                <option value="ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
                <option value="ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย">ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย</option>
            </select>
            </div>
  
            <div class="flex flex-col">
              <label for="bank-company" class="block text-sm font-medium leading-6 text-gray-900 text-[17px] mb-2">โอนเข้าบัญชี</label>
              <select name="bank-company" id="bank-company" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option value="ธนาคารกรุงไทย">ธนาคารกสิกรไทย 5422065818</option>
                <option value="ธนาคารกรุงเทพ">ธนาคารกรุงไทย 0240455568</option>
              </select>
            </div>
          </div>
        </div>

        <div class="flex flex-col justify-center items-center gap-4 mt-4">
          <img class="h-96 w-64 border" id="output" src="https://png.pngtree.com/png-vector/20191021/ourlarge/pngtree-upload-vector-icon-with-transparent-background-png-image_1836029.jpg" alt="payment"/>
          <label for="imgInp" class="block cursor-pointer bg-green-400 w-20 h-6 text-center rounded-lg">แนบสลิป</label>
          <input class="text-sm hidden text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept="image/*" type='file' name="imgInp" id="imgInp" />
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-center my-3">
    <button id="submit" class="py-2 px-5 bg-red-700 text-white rounded-3xl hover:bg-red-600">ยืนยัน</button>
  </div>
@endsection

@section('scripts')
<script>
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    output.src = URL.createObjectURL(file)
  }
}

let totalmoney = document.querySelectorAll('#totalmoney')

  totalmoney.forEach(function(input) {
    input.addEventListener('keyup', function(event) {
        let value = this.value.replace(/[^0-9]/g, ''); // ลบทุกอักขระที่ไม่ใช่ 0-9
        if (value !== '') {
          const intValue = parseInt(value);
          this.value = intValue.toLocaleString('en-US', {
              style: 'decimal',
              maximumFractionDigits: 0,
              minimumFractionDigits: 0
          });
        } else {
            // ถ้าค่าไม่ถูกต้อง ให้กลับไปเป็นค่าเดิม
            this.value = '';
        }
    });

    // เพิ่ม event listener สำหรับการเก็บค่าเดิมเมื่อ focus
    input.addEventListener('focus', function() {
        this.dataset.previousValue = this.value;
    });
  });

let btnsubmut = document.querySelector('#submit');
const userId = @json($user->id);
let sessionCart = @json($cartList);
console.log(sessionCart['discount'].discount);

let dataCourse = {!! json_encode($cartCourses) !!}
let idCourse = [];
let totalPrice = 0;

for (let i = 0; i < dataCourse.length; i++) {
    let id = dataCourse[i].id;
    let price = parseFloat(dataCourse[i].price);

    idCourse.push(id);

    totalPrice += price;
}

totalPrice = totalPrice - ((totalPrice * sessionCart['discount'].discount) / 100 ) 

const customertelEl = document.querySelector('#customer-tel'); 
const banknumberEl = document.querySelector('#bank-number');

customertelEl.addEventListener('input', () => {
  customertelEl.value = filterNumber(customertelEl)
})

banknumberEl.addEventListener('input', () => {
  banknumberEl.value = filterNumber(banknumberEl)
})

function filterNumber(element) {
  return element.value.replace(/[^0-9]/g, '')
}


btnsubmut.addEventListener('click', () => {
  const customername = document.querySelector('#cumtomer-name').value; 
  const totalmoneyInput = document.querySelector('#totalmoney');
  const totalmoney = totalmoneyInput.value.replace(/,/g, '');
  const date_transfer = document.querySelector('#date-transfer').value;
  const bankcustomer = document.querySelector('#bank-customer').value; 
  const bankcompany = document.querySelector('#bank-company').value; 
  const imgInp = document.querySelector('#imgInp');
  const imageFile = imgInp.files[0];
  console.log(totalmoney);
  if(!customername || !banknumberEl.value || !totalmoney || !date_transfer|| !customertelEl.value || !bankcustomer || !bankcompany || !imageFile) {
    Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'กรุณากรอกข้อมูลให้ครบทุกช่อง',
    })
    return false;
  }
  if(idCourse.length <= 0) {
    Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'คุณยังไม่ได้เลือกหลักสูตร',
    })
    return false;
  }
  let formData = new FormData();
  formData.append('name', customername);
  formData.append('totalcourse', idCourse);
  formData.append('totalprice', totalPrice);
  formData.append('date_transfer', date_transfer);
  formData.append('banknumber', banknumberEl.value);
  formData.append('totalmoney', totalmoney);
  formData.append('customertel', customertelEl.value);
  formData.append('bankcustomer', bankcustomer);
  formData.append('bankcompany', bankcompany);
  formData.append('slippayment', imageFile);
  formData.append('user_id', userId);

  try {
    Swal.fire({
      title: 'ยืนยันการสั่งซื้อ',
      text: "ข้อมูลถูกต้องและครบแล้ว กรุณากด ยืนยัน",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'ยันยัน'
    }).then((result) => {
      if (result.isConfirmed) {
        axios.post('/api/payment', formData).then((response) => {
          console.log(response);
          if (response.data.status === 'success') {
            Swal.fire(
              'บันทึกเรียบร้อย',
              'กรุณารอการอนุมัติจากเจ้าหน้าที่',
              'success'
            ).then(() => {
              axios.get('/api/delallcart')
              .then(() => {location.href = "/purchasehistory"})
            })
          }
        }).catch((error) => {
          console.error('เกิดข้อผิดพลาดในการเรียก API:', error);
          // ทำการจัดการข้อผิดพลาดอย่างเหมาะสมที่นี่
        });
      }
    })
  } catch (error) {
    console.error('เกิดข้อผิดพลาดในการระบุ URL หรือข้อมูลร้องขอ:', error);
    // ทำการจัดการข้อผิดพลาดในการระบุ URL หรือข้อมูลร้องขออย่างเหมาะสมที่นี่
  }
})
</script>
@endsection