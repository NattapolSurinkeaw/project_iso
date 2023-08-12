@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
    @include('pages.app_dashboard.components.sidebar')
  </div>
  <!-- box-profile -->
  <div class="w-full bg-gray-100 rounded-lg p-4 flex flex-col gap-4 items-center">
    <div class="flex flex-col justify-center items-center gap-4">
      <h1 class="text-xl font-bold">Profile</h1>

      @if (isset($user->img_profile))
      <img class="w-80 h-96 bg-gray-300 rounded-lg" src="{{$user->img_profile}}" id="Opt" alt="">
      @else
      <img class="w-80 h-96 bg-gray-300 rounded-lg" src="image/icon/user.png" id="Opt" alt="">
      @endif

      <input type="file" name="" id="imgInp">
      <div class="flex flex-col items-center gap-4">
        <p>{{$user->email}}</p>
        <div class="flex gap-4">
          <p>name</p> 
          <input type="text" name="" id="username" value="{{$user->name}}">
        </div>
      </div>
  
    </div>
    <div>
      <button onclick="saveData()" class="bg-green-500 text-white py-2 px-4 rounded-xl">save</button>
    </div>
  </div>
  <!-- endbox -->

</div>
@endsection

@section('scripts')

<script>

  // image Preview
  imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      Opt.src = URL.createObjectURL(file)
    }
  }

  let name = document.querySelector("#username").value;
  console.log(name);

  let param = {
    name: name,

  }
  console.log(param)

  function saveData() {
    axios.put(`api/dashboard/edituser/${user.id}`,param).
    then(function (response) {console.log(response.data)})
    console.log("saveData")
  }
</script>

@endsection