<div class="w-full xs:max-w-[240px] bg-gray-300 px-2 rounded-xl">
  <div id="navSide" class="h-screen max-xs:h-10 max-xs:w-full overflow-hidden transition-all duration-300">
    <div class="flex justify-between">
      <a href="{{url('/dashboard')}}"><h1 class="sm:p-5 mt-2 mb-4 font-medium text-center text-xl">User Dashboard</h1></a>
      <button class="sm:p-5 xs:hidden mt-2 mb-4 font-medium text-center text-xl" id="btnShow">Show</button>
    </div>
    <div class="flex flex-col">
      <ul class="flex flex-col items-center gap-4">
        <a class="w-full" href="{{url('/dashboard')}}"><li class="bg-gray-200 hover:bg-gray-400 hover:text-center transition-all duration-300 ease-in-out rounded-xl p-2">Dashboard</li></a>
        <a class="w-full" href="{{url('/mycourse')}}"><li class="bg-gray-200 hover:bg-gray-400 hover:text-center transition-all duration-300 ease-in-out rounded-xl p-2">My Course</li></a>
        <a class="w-full" href="{{url('/purchasehistory')}}"><li class="bg-gray-200 hover:bg-gray-400 hover:text-center transition-all duration-300 ease-in-out rounded-xl p-2">Purchase history</li></a>
        <a class="w-full" href="{{url('/reservationhistory')}}"><li class="bg-gray-200 hover:bg-gray-400 hover:text-center transition-all duration-300 ease-in-out rounded-xl p-2">Reservation history</li></a>
        <div>
        </div>
      </ul>
    </div>
  </div>
</div>

<script>
  let isNavOpen = false; // สร้างตัวแปรเพื่อติดตามสถานะของการเปิด/ปิด navSide

  btnShow.onclick = () => {
      if (isNavOpen) {
          // ปิด navSide
          navSide.style.height = '40px';
          isNavOpen = false;
      } else {
          // เปิด navSide
          navSide.style.height = '273px';
          isNavOpen = true;
      }
  }
</script>