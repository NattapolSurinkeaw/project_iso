<nav id="myNav" class="fixed left-0 top-0 w-full duration-300 bg-inherit shadow z-[999]">
  <div class="container m-auto flex items-center justify-between text-gray-700">
    <a href="{{url('/')}}" class="flex items-center">
      <img src="/image/icon/isologo.png" class="mr-3 h-12" alt="isoconsult logo" />
    </a>
    <ul id="navLink" class="text-base hidden text-inherit cursor-pointer items-center font-semibold md:flex text-gray-200">
      <a href="{{url('/')}}"><li class="px-6 py-4 hover:bg-gray-200">Home</li></a>
      <a href="{{url('/elerning')}}"><li class="px-6 py-4 hover:bg-gray-200">Elerning</li></a>
      <a href="{{url('/newsandevent')}}"><li class="px-6 py-4 hover:bg-gray-200">NEWS & EVENT</li></a>
      <a href="{{url('/training')}}"><li class="px-6 py-4 hover:bg-gray-200">TRAINING</li></a>
      <a href="{{url('/contact')}}"><li class="px-6 py-4 hover:bg-gray-200">CONTACT</li></a>
    </ul>
    @if($user)
      <div class="text-base hidden cursor-pointer items-center pr-10 font-semibold md:flex gap-3 items-center">
        <a href="{{url('/dashboard')}}"><div><img class="rounded-full w-8 h-8" src="{{$user->img_profile}}" alt=""></div></a>
        <a href="{{url('/dashboard')}}"><h1 id="navUser" class="text-inherit">{{$user->name}}</h1></a>
        <a href="{{url('/cart')}}"><box-icon name='cart' color='#a00101' ></box-icon></a>
        <button onclick="onLogout()" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Logout</button>
      </div>
    @else
      <div class="text-base hidden cursor-pointer items-center pr-10 font-semibold md:flex gap-2">
        <a href="/login" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Login</a>
        <a href="/register" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Register</a>
      </div>
    @endif
    <button class="group mx-2 block rounded py-3 focus:outline-none md:hidden">
      <div class="mb-1 h-1 w-5 bg-gray-600"></div>
      <div class="mb-1 h-1 w-5 bg-gray-600"></div>
      <div class="h-1 w-5 bg-gray-600"></div>
      <div class="absolute -right-full top-0 h-screen w-6/12 border bg-white opacity-0 transition-all duration-300 group-focus:right-0 group-focus:opacity-100">
        <ul class="flex w-full cursor-pointer flex-col items-center pt-10 text-base">
          <a class="" href="/"><li class="w-full px-6 py-4 hover:bg-gray-200">Home</li></a>
          <a href="/elerning"><li class="w-full px-6 py-4 hover:bg-gray-200">Elerning</li></a>
          <a href="/newsandevent"><li class="w-full px-6 py-4 hover:bg-gray-200">NEWS & EVENT</li></a>
          <a href="/training"><li class="w-full px-6 py-4 hover:bg-gray-200">TRAINING</li></a>
          <a href="/contact"><li class="w-full px-6 py-4 hover:bg-gray-200">CONTACT</li></a>
          @if($user)
            <a class="-order-1 font-medium" href="{{url('/dashboard')}}"><li class="w-full px-6 py-4 hover:bg-gray-200 flex justify-center items-center">{{$user->name}}</li></a>
            <a class=" order-first" href="{{url('/dashboard')}}"><li class="w-full px-6 py-4 hover:bg-gray-200 flex justify-center items-center"><img class="w-10 h-10 rounded-full" src="{{$user->img_profile}}" alt=""></li></a>
            <a href="/cart" class="flex justify-center w-full px-6 py-4 hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="16.5" cy="19.5" r="1.5"></circle></svg></a>
            <li class="w-full px-6 py-4 hover:bg-gray-200 hover:text-red-500" onclick="onLogout()">Logout</li>
          @else
            <a href="/login" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Login</a>
            <a href="/register" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Register</a>
          @endif
        </ul>
      </div>
    </button>
  </div>
</nav>

<script>
  
  function onLogout() {
    axios.get('/api/auth/logout').then((response) => {
      console.log(response);
      location.href ='/login';
    });
  }
</script>