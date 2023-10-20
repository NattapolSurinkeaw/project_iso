<div class="w-full xs:max-w-[240px] bg-gray-300 px-2 rounded-xl">
  <div class="2xl:h-screen max-xs:h-full max-xs:w-full">
    <a href="{{url('/dashboard')}}"><h1 class="p-5 mt-2 mb-4 font-medium text-center text-xl">User Dashboard</h1></a>
    <div class="flex flex-col">
      <ul class="flex flex-col items-center gap-4">
        <a class="w-full" href="{{url('/dashboard')}}"><li class="bg-gray-200 hover:bg-gray-400 hover:text-center transition duration-300 ease-in-out rounded-xl p-2">Dashboard</li></a>
        <a class="w-full" href="{{url('/mycourse')}}"><li class="bg-gray-200 hover:bg-gray-400 hover:text-center transition duration-300 ease-in-out rounded-xl p-2">My Course</li></a>
        <a class="w-full" href="{{url('/purchasehistory')}}"><li class="bg-gray-200 hover:bg-gray-400 hover:text-center transition duration-300 ease-in-out rounded-xl p-2">Purchase history</li></a>
        <a class="w-full" href="{{url('/reservationhistory')}}"><li class="bg-gray-200 hover:bg-gray-400 hover:text-center transition duration-300 ease-in-out rounded-xl p-2">Reservation history</li></a>
        <div>
        </div>
      </ul>
    </div>
  </div>
</div>