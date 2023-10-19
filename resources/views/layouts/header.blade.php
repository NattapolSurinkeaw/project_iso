{{-- <nav id="myNav" class="sticky top-0 w-full duration-300 bg-white shadow z-[10]">
  <div class="md:container m-auto flex items-center justify-between text-gray-700">
    <a href="{{url('/')}}" class="flex items-center">
      <img src="/image/icon/isologo.png" class="mr-3 h-12" alt="isoconsult logo" />
    </a>
    <ul id="navLink" class="text-base hidden text-inherit cursor-pointer items-center font-medium xl:flex text-gray-200">
      <a href="{{url('/')}}"><li class="px-6 py-4 hover:bg-gray-200">HOME</li></a>
      <a href="{{url('/elerning')}}">
        <li class="px-6 py-4 hover:bg-gray-200 transition duration-300 ease-in-out relative group">
          ELEARNING
          <ul class="absolute top-[55px] left-0 transition duration-300 ease-in-out bg-white shadow-lg rounded-md text-gray-800 p-4 hidden group-hover:block" style="min-width: 20rem;">
            @foreach ($categories as $category)
            <a href="/elerning/{{$category->id}}">
              <li class="cursor-pointer hover:bg-gray-200">{{$category->category_name}}</li>
            </a>
            @endforeach
          </ul>
        </li>
      </a>
      <a href="{{url('/newsandevent')}}"><li class="px-6 py-4 hover:bg-gray-200">NEWS & EVENT</li></a>
      <a href="{{url('/training')}}" class="group">
        <li class="px-6 py-4 hover:bg-gray-200 relative group">
          TRAINING
          <ul class="absolute top-[55px] left-0 bg-white shadow-lg rounded-md text-gray-800 p-4 hidden group-hover:block" style="min-width: 20rem;">
            @foreach ($modules as $module)
            <a href="/training/{{$module->id}}"> 
              <li class="cursor-pointer hover:bg-gray-200">{{$module->name}}</li>
            </a>
            @endforeach
          </ul>
        </li>
      </a>
      <a href="{{url('/contact')}}"><li class="px-6 py-4 hover:bg-gray-200">CONTACT</li></a>
    </ul>
    @if ($user)
      <div class="text-base hidden cursor-pointer items-center pr-10 font-medium xl:flex gap-3 items-center">
        @if (empty($user->img_profile))
        <a href="{{url('/dashboard')}}"><div><img class="rounded-full w-8 h-8" src="/image/icon/user.png" alt=""></div></a>
        @else
        <a href="{{url('/dashboard')}}"><div><img class="rounded-full w-8 h-8" src="{{$user->img_profile}}" alt=""></div></a>
        @endif
        <a href="{{url('/dashboard')}}"><h1 id="navUser" class="text-inherit">{{$user->name}}</h1></a>
        <a href="{{url('/cart')}}"><box-icon name='cart' color='#a00101' ></box-icon></a>
        <button onclick="onLogout()" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Logout</button>
      </div>
    @else
      <div class="text-base hidden cursor-pointer items-center pr-10 font-semibold xl:flex gap-2">
        <a href="/login" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Login</a>
        <a href="/register" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Register</a>
      </div>
    @endif
    <button class="group mx-2 block rounded py-3 focus:outline-none xl:hidden duration-500" name="menu" onclick="showNav(this)">
      <div class="mb-1 h-1 w-5 bg-gray-600"></div>
      <div class="mb-1 h-1 w-5 bg-gray-600"></div>
      <div class="h-1 w-5 bg-gray-600"></div>

      <div class="absolute -right-full top-12 h-screen w-6/12 border bg-white hidden opacity-0 transition-all duration-500 group-focus:right-0 group-focus:opacity-100" id="menu-content">
        <ul class="flex w-full cursor-pointer flex-col items-center pt-10 text-base">
          <a class="" href="/"><li class="w-full px-6 py-4 hover:bg-gray-200">HOME</li></a>
          <a href="/elerning"><li class="w-full px-6 py-4 hover:bg-gray-200">ELEARNING</li></a>
          <a href="/newsandevent"><li class="w-full px-6 py-4 hover:bg-gray-200">NEWS & EVENT</li></a>
          <a href="/training"><li class="w-full px-6 py-4 hover:bg-gray-200">TRAINING</li></a>
          <a href="/contact"><li class="w-full px-6 py-4 hover:bg-gray-200">CONTACT</li></a>
          @if ($user)
            <a class="-order-1 font-medium" href="{{url('/dashboard')}}"><li class="w-full px-6 py-4 hover:bg-gray-200 flex justify-center items-center">{{$user->name}}</li></a>
            @if (empty($user->img_profile))
            <a class=" order-first" href="{{url('/dashboard')}}"><li class="w-full px-6 py-4 hover:bg-gray-200 flex justify-center items-center"><img class="w-10 h-10 rounded-full" src="/image/icon/user.png" alt=""></li></a>
            @else
            <a class=" order-first" href="{{url('/dashboard')}}"><li class="w-full px-6 py-4 hover:bg-gray-200 flex justify-center items-center"><img class="w-10 h-10 rounded-full" src="{{$user->img_profile}}" alt=""></li></a>
            @endif
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
</nav> --}}

<nav id="myNav" class="sticky top-0 w-full h-[60px] bg-blue-600 z-10 px-8 flex justify-between items-center">
    <a href="{{ url('/') }}" class="flex items-center">
        <img src="/image/icon/isologo.png" class="mr-3 h-12" alt="isoconsult logo" />
    </a>
    <ul id="elNav" class="max-xl:overflow-hidden max-xl:bg-slate-600 max-xl:p-0 flex flex-row max-xl:flex-col max-xl:fixed max-xl:items-center max-xl:top-[60px] max-xl:right-0 text-xl text-white w-full max-xl:w-0 h-full max-xl:h-screen gap-4 justify-end max-xl:justify-start max-xl:items-start items-center transition-all ease-in-out duration-300">
        <li><a href="/">HOME</a></li>
        <li><a href="elerning">ELEARNING</a></li>
        <li><a href="newsandevent">NEWS & EVENT</a></li>
        <li><a href="training">TRAINING</a></li>
        <li><a href="contact">CONTACT</a></li>
        <li>

        @if ($user)
          @if (empty($user->img_profile))
            <a class=" order-first" href="{{ url('/dashboard') }}">
                <img class="rounded-full w-[40px] h-[40px]" src="/image/icon/user.png" alt="">
            </a>
          @else
            <a class=" order-first" href="{{ url('/dashboard') }}">
        <li class=""><img class="rounded-full w-[40px] h-[40px]" src="{{ $user->img_profile }}" alt=""></li>
        </a>
        @endif
        <a href="/cart" class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path
                d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z">
            </path>
            <circle cx="10.5" cy="19.5" r="1.5"></circle>
            <circle cx="16.5" cy="19.5" r="1.5"></circle>
          </svg></a>
        <li class="" onclick="onLogout()">Logout</li>
        </li>
    @else
        <li><a href="login">LOGIN</a></li>
        <li><a href="register">REGISTER</a></li>
        @endif
    </ul>
    <input type="checkbox" id="check" hidden />
    <label id="burgur" for="check" class="float-right flex w-5 flex-col gap-1 leading-[80px] xl:hidden cursor-pointer m-2">
      <div class="border"></div>
      <div class="border"></div>
      <div class="border"></div>
    </label>
</nav>

{{-- <nav id="myNav" class="sticky top-0 flex items-center justify-between h-14 w-full bg-slate-600 z-50 xl:px-10">
    <!-- <label for="" class="pl-12 text-3xl leading-[80px] text-white md:pl-24 md:text-4xl md:leading-[80px]">Navigation</label> -->
    <a href="{{url('/')}}" class="flex items-center">
      <img src="/image/icon/isologo.png" class="mr-3 h-12" alt="isoconsult logo" />
    </a>
    <input type="checkbox" id="check" hidden />
    <label for="check" class="float-right mr-10 flex w-5 flex-col gap-1 leading-[80px] lg:hidden cursor-pointer m-2">
      <div class="border"></div>
      <div class="border"></div>
      <div class="border"></div>
    </label>
    
    <ul id="elNav" class="text-white w-full">
    <ul id="elNav" class="z-50 fixed flex left-[100%] top-14  mr-10 h-[100vh] w-[50%] rounded bg-slate-700 text-center uppercase leading-[80px] text-white transition-all duration-300 lg:relative lg:left-0 lg:-top-10 lg:flex lg:gap-6 lg:h-0 lg:w-fit lg:transition-none">
      <li><a href="/">HOME</a></li>
      <li><a href="elerning">ELEARNING</a></li>
      <li><a href="newsandevent">NEWS & EVENT</a></li>
      <li><a href="training">TRAINING</a></li>
      <li><a href="contact">CONTACT</a></li>
      @if ($user)
        @if (empty($user->img_profile))
          <a class=" order-first" href="{{url('/dashboard')}}"><li class="w-full px-6 py-4 hover:bg-gray-200 flex justify-center items-center"><img class="w-10 h-10 rounded-full" src="/image/icon/user.png" alt=""></li></a>
        @else
          <a class=" order-first" href="{{url('/dashboard')}}"><li class="w-full px-6 py-4 hover:bg-gray-200 flex justify-center items-center"><img class="w-10 h-10 rounded-full" src="{{$user->img_profile}}" alt=""></li></a>
        @endif
          <a href="/cart" class="flex justify-center w-full px-6 py-4 hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="16.5" cy="19.5" r="1.5"></circle></svg></a>
          <li class="w-full px-6 py-4 hover:bg-gray-200 hover:text-red-500" onclick="onLogout()">Logout</li>
      @else
        <li><a href="login">LOGIN</a></li>
        <li><a href="register">REGISTER</a></li>
      @endif
    </ul>
</nav> --}}

<script>
    function onLogout() {
        axios.get('/api/auth/logout').then((response) => {
            console.log(response);
            location.href = '/login';
        });
    }

    let contentMenu = document.querySelector('#menu-content');

    function showNav(e) {
        console.log(e.name)
        e.name = e.name === 'menu' ? 'close' : 'menu';
        contentMenu.classList.toggle('hidden');
    }
</script>
<script>
  const burgur = document.getElementById("burgur")
  const sidebar = document.getElementById("elNav")

  burgur.addEventListener("click", () => {
    if (sidebar.classList.contains("open")) {
      sidebar.classList.remove("open")
      sidebar.style.width = "0";
      sidebar.style.padding = "0";
    } else {
      
      sidebar.classList.add("open")
      sidebar.style.width = "40%";
      sidebar.style.padding = "1rem";
    }
      
  }) 
</script>
