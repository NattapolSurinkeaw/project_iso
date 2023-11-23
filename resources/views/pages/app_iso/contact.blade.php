@extends('layouts.main')
@section('meta-description','Contact us ISOConsult.shop for more information')
@section('meta-keywords', 'ISOConsult,elerning,products,quality,online training,onsite training')
@section('title', 'Contact us ')

@section('content')
<div class="min-h-[690px] ">
  <div class="mx-auto mt-4 2xl:max-w-[1536px] max-2xl:max-w-[90%]  p-4 bg-gray-100 rounded-md">
    <h1 class="text-3xl text-center">Contact</h1>
    <div class="flex max-2xl:flex-col justify-between gap-10">
      <div class="flex flex-col gap-10 w-full">
        <div class="flex gap-4 w-full">
          <div class="flex flex-col w-full">
            <label for="fname-lname">Name-Surname:</label>
            <input type="text" class="w-full h-10 px-2 max-xs:h-8 border border-gray-300 rounded-md" id="fname-lname">
          </div>
          <div class="flex flex-col w-full">
            <label for="phone-number">Telephone:</label>
            <input type="text" class="w-full h-10 px-2 max-xs:h-8 border border-gray-300 rounded-md" id="phone-number" maxlength="10">
          </div>
        </div>

        <div class="flex gap-4 w-full">
          <div class="flex flex-col w-full">
            <label for="organiz">Organization:</label>
            <input type="text" class="w-full h-10 px-2 max-xs:h-8 border border-gray-300 rounded-md" id="organiz">
          </div>
          <div class="flex flex-col w-full">
            <label for="email">Email:</label>
            <input type="text" class="w-full h-10 px-2 max-xs:h-8 border border-gray-300 rounded-md" id="email">
          </div>
        </div>
        <div>
          <label for="leave-message">Message:</label>
          <textarea name="" id="leave-message" cols="30" rows="10" class="w-full px-2 max-xs:h-20 border border-gray-300 rounded-md"></textarea>
        </div>
        <div>
          <button class="py-2 px-3 bg-green-600 text-white rounded-lg" id="sendMessage">Send! &rarr;</button>
        </div>
      </div>
      {{-- <div class="flex max-xs:flex-col max-2xl:justify-center gap-10">
        <div class="group h-96 w-80 [perspective:1000px]">
          <div class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0">
              <img class="h-full w-full rounded-xl object-cover shadow-xl shadow-black/40" src="https://img.freepik.com/premium-vector/location-point-icon-vector-illustration_9999-17225.jpg?w=2000" alt="" />
            </div>
            <div class="absolute inset-0 h-full w-full rounded-xl bg-black/80 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-col items-center justify-center">
                <h1 class="text-2xl pb-3 font-bold">OFFICE ADDRESS</h1>
                <p class="text-lg">80/8 Samwa Road</p>
                <p class="text-lg">Bangchan, Khlongsamwa</p>
                <p class="text-lg">Bangkok 10510</p>
              </div>
            </div>
          </div>
        </div>
    
        <div class="group h-96 w-80 [perspective:1000px]">
          <div class="relative h-full w-[full] rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0">
              <img class="h-full w-full rounded-xl object-contain shadow-xl shadow-black/40" src="https://png.pngitem.com/pimgs/s/20-202062_old-phone-old-phone-icon-png-transparent-png.png" alt="" />
            </div>
            <div class="absolute inset-0 h-full w-full rounded-xl bg-black/80 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-col items-center justify-center">
                <h1 class="text-2xl pb-3 font-bold">PHONE AND FAX</h1>
                <p class="text-lg">Local: +66(0)2-107-6977</p>
                <p class="text-lg">CS: +66(0)88-905-0555</p>
                <p class="text-lg">FA: +66(0)90-940-9509</p>
              </div>
            </div>
          </div>
        </div>
    
        <div class="group h-96 w-80 [perspective:1000px]">
          <div class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
            <div class="absolute inset-0">
              <img class="h-full w-full rounded-xl object-contain shadow-xl shadow-black/40" src="https://cdn-icons-png.flaticon.com/512/2549/2549872.png" alt="" />
            </div>
            <div class="absolute inset-0 h-full w-full rounded-xl bg-black/80 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden]">
              <div class="flex min-h-full flex-col items-center justify-center">
                <h1 class="text-2xl pb-3 font-bold">EMAIL ADDRESS</h1>
                <p class="text-lg">www.isoconsult.org</p>
                <p class="text-lg">cs.isoconsult@gmail.com</p>
                <p class="text-lg">Line ID: isoconsult</p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="flex justify-center">
        <iframe class="rounded-xl border" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15496.753526029157!2d100.726389!3d13.827724!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d648e0b6f5499%3A0x9115940a3a6aea60!2sQuality%20Associates%20Ltd.!5e0!3m2!1sth!2sth!4v1688743924456!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>
  </div>
</div>
@include('layouts.footer')
@endsection

@section('scripts')
<script>
  const sendMessage = document.querySelector('#sendMessage')

  sendMessage.addEventListener('click', () => {
    sendLeaveMessage()
  })

  function sendLeaveMessage() {
    let fname_lname = document.querySelector('#fname-lname').value;
    let phone_number = document.querySelector('#phone-number').value;
    let organiz = document.querySelector('#organiz').value;
    let email = document.querySelector('#email').value;
    let leave_message = document.querySelector('#leave-message').value;
    if(!fname_lname || !phone_number || !organiz || !email || !leave_message) {
      console.log("ค่าว่าง")
      return false;
    }

    let param = {
      'fname_lname' : fname_lname,
      'phone_number' : phone_number,
      'organiz' : organiz,
      'email' : email,
      'leave_message' : leave_message
    }
    console.log(param);
    axios.post(`/api/sendmessage`,param).then((response) => {
      console.log(response);
      if(response.status = "success"){
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          }).then(() => {
            location.reload();
          })
        }
    })
    return false;
  }
</script>
@endsection