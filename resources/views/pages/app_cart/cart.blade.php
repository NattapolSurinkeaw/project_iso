@extends('layouts.main')
@section('title') CartPage @endsection
@section('content')
  <div class="py-4">
    <h1 class="text-3xl text-center font-medium">หลักสูตรในรถเข็น</h1>

    <div class="flex max-lg:flex-col max-lg:gap-5 p-10">
      <!-- detail cartProduct -->
      <div class="w-full border rounded-lg h-[500px] p-5 flex flex-col gap-4 overflow-auto">
        @if(count($cartCourses) > 0)
        @foreach($cartCourses as $course)
        <div class="flex max-xs:flex-col">
          <div class="h-48 w-64 max-xs:w-full">
            <img class="w-full h-full rounded-lg" src="{{ $course->img_course}}" alt="course">
          </div>
          <div class="px-10 max-xs:py-2 w-full flex flex-col justify-between">
            <h1 class="text-2xl font-bold">Course : {{ $course->course_name }} </h1>
            <p class="text-gray-400">{{ $course->description }}</p>
            <p class="text-gray-400">{{ $course->user_name }}</p>
            <div class="flex gap-1">
              <p class="text-yellow-600 font-bold">4.9</p>
              <svg aria-hidden="true" class="w-5 h-5 mb-2 text-yellow-400" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>First star</title>
                  <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
              </svg>
            </div>
            <div class="flex flex-row justify-between">
              <div class="flex gap-4">
                <h1 class="text-xl font-bold" id="price">THB {{ number_format($course->price, 2) }}</h1>
                {{-- <h1 class="text-xl text-gray-400 line-through" id="discout">THB 349</h1> --}}
              </div>
            <button data-id="{{ $course->id}}" id="remove-from-cart"><box-icon name='trash' color='#a80404'></box-icon></button>
            </div>
          </div>
        </div>
        <hr>
        @endforeach
        @else
        <div class="w-full h-4/5 p-4 flex flex-col justify-center items-center">
          <img class=" h-full" src="/image/icon/empty.png" alt="">
          <h1 class="text-gray-400 text-xl">cart empty...</h1>
        </div>
        @endif

      </div>
    
      <div class="w-full lg:max-w-[500px] xs:px-14 ">
        <h1 class="text-xl text-gray-400 mb-5">ทั้งหมด</h1>
        @if(count($cartCourses) > 0)
        @php
          $totalPrice = 0; // เก็บราคาทั้งหมด
        @endphp
        @foreach($cartCourses as $course)
        @php
          $totalPrice += floatval($course->price); // เพิ่มราคาลงใน totalPrice
        @endphp
        @endforeach
          <div class="flex gap-2">
            <h1 class="text-3xl font-medium">THB : </h1>
            <h1 class="text-3xl font-medium" id="total-price">{{ number_format($totalPrice, 2) }}</h1>
          </div>
        @else
        <div class="flex gap-2">
          <h1 class="text-3xl font-medium">THB : </h1>
          <h1 class="text-3xl font-medium" id="total-price">0</h1>
        </div>
        @endif
        <hr>
        <div class="flex flex-col gap-3 my-2">
          {{-- <h1 class="text-xl">โปรโมชั่น</h1> --}}
          <div class="flex gap-2">
            <input type="text" class="rounded-lg border-2 w-full py-1 px-4 shadow-md" id="inp-discount" placeholder="คูปองส่วนลด">
            <button class="py-1 px-2 bg-green-500 text-white rounded-lg" onclick="getDiscount()">Apply</button>
          </div>
          <button id="payment" class="text-center font-medium text-white rounded-xl py-1">ชำระเงิน</button>
        </div>
      </div>
    
    </div>
  </div>
@endsection

@section('scripts')
<script>
  // ลบ cart list
  document.addEventListener('DOMContentLoaded', function () {
    const removeFromCartButtons = document.querySelectorAll('#remove-from-cart');

    removeFromCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const courseId = button.getAttribute('data-id');
            removeFromCart(courseId);
        });
    });

    function removeFromCart(courseId) {
        axios.post('/remove-cart', {
            course_id: courseId
        })
        .then(response => {
            console.log(response.data.message);
            location.reload();
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    }
  });

  // payment
  let cartlist = {!! json_encode($cartCourses) !!};
  console.log(cartlist);
  if(cartlist.length > 0) {
    document.querySelector('#payment').classList.add("bg-red-600", "hover:bg-red-500");
    payment.addEventListener('click', () => {
      location.href = "/payment"
    })
  } else {
    document.querySelector('#payment').classList.add("bg-red-200");
    document.querySelector('#payment').classList.add("cursor-default");
  }

  function getDiscount() {
    let code = {
      A1 : 50,
      B2 : 70,
      C3 : 80
    }
    let inpDiscount = document.querySelector('#inp-discount').value;
    let elprice = document.querySelector('#total-price');
    
    if (code.hasOwnProperty(inpDiscount)) {
        const discountPercentage = code[inpDiscount];
        const price = parseInt(elprice.textContent);
        
        // คำนวณส่วนลดและแสดงผลใน elprice.innerText
        const discountAmount = (discountPercentage * price )/ 100  ;
        console.log(discountAmount)
        const discountedPrice = price - discountAmount;
        elprice.innerText = discountedPrice.toFixed(2); // แสดงราคาลดเป็นทศนิยม 2 ตำแหน่ง
    } else {
        // ถ้ารหัสส่วนลดไม่ตรงกับใน code ให้แสดงข้อความผิดพลาดหรือทำอย่างอื่นตามที่คุณต้องการ
        // elprice.innerText = "รหัสส่วนลดไม่ถูกต้อง";
        console.log("code ไม่ถูกต้อง")
    }
  }

</script>
@endsection