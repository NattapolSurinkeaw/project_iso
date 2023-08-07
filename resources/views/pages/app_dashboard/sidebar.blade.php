<div class="h-full">
  <a href="{{url('/dashboard')}}"><h1 class="p-5 font-bold">User Dashboard</h1></a>
  <div class="flex flex-col justify-between h-full">
    <ul class="flex flex-col items-center gap-4">
      <a class="w-full" href="{{url('/profile')}}"><li class="bg-gray-200 hover:bg-gray-400 rounded-xl text-center p-2">Profile</li></a>
      <a class="w-full" href="{{url('/changepassword')}}"><li class="bg-gray-200 hover:bg-gray-400 rounded-xl text-center p-2">Change password</li></a>
      <a class="w-full" href="{{url('/purchase-course')}}"><li class="bg-gray-200 hover:bg-gray-400 rounded-xl text-center p-2">Purchase history</li></a>
      <a class="w-full" href="{{url('/reserve-training')}}"><li class="bg-gray-200 hover:bg-gray-400 rounded-xl text-center p-2">Reservation history</li></a>
    </ul>
    <button class="p-3 bg-red-400 rounded-xl">Logout</button>
  </div>
</div>