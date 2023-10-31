<nav id="myNav" class="sticky top-0 z-10 flex h-[60px] items-center justify-between bg-white px-8 shadow 2xl:px-28">
  <a href="{{ url('/') }}" class="flex items-center">
    <img src="/image/icon/isologo.png" class="h-12" alt="isoconsult logo" />
  </a>
  <ul id="elNav" class="flex h-full w-full items-center justify-end max-xl:gap-10 text-lg font-normal transition-all duration-300 ease-in-out max-xl:fixed max-xl:right-0 max-xl:top-[60px] max-xl:h-screen max-xl:w-0 max-xl:flex-col max-xl:items-center max-xl:justify-start max-xl:overflow-hidden max-xl:overflow-y-scroll max-xl:bg-slate-600 max-xl:p-0 xl:justify-between">
    <div class="invisible"></div>
    <div class="flex items-center xl:gap-10 max-xl:gap-5 max-xl:flex-col max-xl:items-center">
      <li><a class="xl:py-4 max-xl:px-10" href="{{ url('/') }}">HOME</a></li>
      <li class="relative group">
        <a class="xl:py-4 max-xl:px-10" href="{{ url('/elerning') }}">ELEARNING </a>
        <ul class="max-xl:hidden absolute top-[43px] left-0 transition-all duration-300 ease-in-out bg-white shadow-lg rounded-md text-gray-800 px-4 h-0 group-hover:h-auto group-hover:py-4 overflow-hidden" style="min-width: 20rem;">
          @foreach ($categories as $category)
          <a href="/elerning/{{$category->id}}">
            <li class="cursor-pointer">{{$category->category_name}}</li>
          </a>
          @endforeach
        </ul>
      </li>
      <li><a class="xl:py-4 max-xl:px-10" href="{{ url('/newsandevent') }}">NEWS & EVENT</a></li>
      <li class="relative group">
        <a class="xl:py-4 max-xl:px-10" href="{{ url('/training') }}">TRAINING </a>
        <ul class="max-xl:hidden absolute top-[43px] left-0 transition-all duration-300 ease-in-out bg-white shadow-lg rounded-md text-gray-800 px-4 h-0 group-hover:h-auto group-hover:py-4 overflow-hidden" style="min-width: 22rem;">
          @foreach ($modules as $module)
          <a href="/training/{{$module->id}}">
            <li class="cursor-pointer">{{$module->name}}</li>
          </a>
          @endforeach
        </ul>
      <li><a class="lg:py-4" href="{{ url('/contact') }}">CONTACT</a></li>
    </div>
    <div class="flex items-center gap-5 max-xl:flex-col max-xl:items-center @if($user) max-xl:-order-1 @endif">
      @if ($user)
      <li class="max-xl:-order-1">
        <a class="order-first lg:py-4" href="{{ url('/dashboard') }}">
          @if($user->img_profile)
          <img class="h-[40px] w-[40px] rounded-full" src="{{$user->img_profile}}" alt="" />
          @else
          <img class="h-[40px] w-[40px] rounded-full" src="/image/icon/user.png" alt="" />
          @endif
        </a>
      </li>
      <li class="flex items-center justify-center max-xl:-order-1"><a class="-order-1 font-medium xl:py-4 max-2xl:px-4" href="{{url('/dashboard')}}">{{$user->name}}</a></li>
      <li>
        <a href="/cart" class="flex w-full justify-center xl:py-4 max-2xl:px-4"
          ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z"></path>
            <circle cx="10.5" cy="19.5" r="1.5"></circle>
            <circle cx="16.5" cy="19.5" r="1.5"></circle></svg>
        </a>
      </li>
      <li><button onclick="onLogout()" class="hover:text-red-500 max-xl:text-red-600 xl:py-4 max-2xl:px-4">Logout</button></li>
      @else
      <li><a href="{{ url('/login') }}" class="lg:py-4">login</a></li>
      <li><a href="{{ url('/register') }}" class="lg:py-4">register</a></li>
      @endif
    </div>
  </ul>

  <input type="checkbox" id="check" hidden />
  <label id="burgur" for="check" class="float-right m-2 flex w-5 cursor-pointer flex-col gap-1 leading-[80px] xl:hidden">
    <div class="border"></div>
    <div class="border"></div>
    <div class="border"></div>
  </label>
</nav>

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

    const burgur = document.getElementById("burgur")
    const sidebar = document.getElementById("elNav")

    burgur.addEventListener("click", () => {
      if (sidebar.classList.contains("open")) {
        sidebar.classList.remove("open")
        sidebar.classList.remove("max-xl:w-[60%]")
        sidebar.classList.remove("max-xl:p-4")
      } else {
        sidebar.classList.add("open")
        sidebar.classList.add("max-xl:w-[60%]")
        sidebar.classList.add("max-xl:p-4")
      }
        
    }) 
</script>
