@extends('backend.layouts.main')
@section('title') Member @endsection
@section('container')

<div class="overflow-hidden">
  <div class="m-2">
    <a href="{{url('/backend/member')}}" class="bg-blue-500 text-white rounded-lg py-1 px-2">BACK</a>
  </div>
    <!-- box-profile -->
    <div class="w-full h-[800px] bg-gray-100 rounded-lg p-4 flex flex-col gap-4 overflow-y-auto">
      <div class="flex flex-col justify-center gap-4">
        <h1 class="text-2xl font-medium text-center">Profile</h1>

        <div class="flex justify-center">
            @if (isset($userdata->img_profile))
                <img class="w-80 h-96 bg-gray-300 rounded-lg" src="{{ $user->img_profile }}" id="Opt" alt="">
            @else
                <img class="w-80 h-96 bg-gray-300 rounded-lg" src="/image/icon/user.png" id="Opt" alt="">
            @endif
        </div>

        <div class="w-full flex flex-col items-center justify-center gap-4">
          <div class="flex gap-2">
            <p class="font-bold">Email : </p>
            <p>{{ $userdata->email }}</p>
          </div>
          <div class="flex gap-2">
            <p class="font-bold">name : </p>
            <p>{{ $userdata->name }}</p>
          </div>
        </div>
        <button onclick="editUser()" class="bg-orange-500 p-1 px-2 mx-auto rounded-lg text-white">แก้ไข</button>
      </div>
      <!-- box-mycourse -->
      <div class="p-4 bg-white rounded-lg">
        <h1 class="text-xl font-bold text-center">my course</h1>
        <div class="flex flex-wrap gap-2 mt-5">
            {{-- @if(count($elerningcourses) > 0) --}}
            {{-- @foreach ($elerningcourses as $elerningcourse) --}}
            {{-- <a href="{{url('/course/'.$elerningcourse->id)}}"> --}}
                <div class=" border-2 rounded-xl p-5 flex flex-col justify-center items-center gap-2 shadow-lg">
                    <div class="overflow-hidden rounded-lg h-42 w-64">
                        {{-- @if(!empty($elerningcourse->img_course)) --}}
                            {{-- <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="{{$elerningcourse->img_course}}" alt=""> --}}
                        {{-- @else --}}
                            <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="/image/icon/isologo.png" alt="">
                        {{-- @endif --}}
                    </div> 
                    <div class="w-full flex flex-col items-start gap-2">
                      <div class="flex justify-between items-center">
                        {{-- <h1 class="text-2xl font-bold w-full truncate">{{$elerningcourse->course_name}}</h1> --}}
                      </div>

                      <div class="flex justify-between items-center">
                          <div class="flex justify-between">
                            {{-- <h1 class="text-lg text-gray-400">{{$elerningcourse->user_name}}</h1> --}}
                          </div>
                      </div>
                    </div>
                </div>
            </a>
            {{-- @endforeach --}}
            {{-- @else --}}
            <div class="mx-auto">
              <img class="w-32 " src="/image/icon/bookempty.png" alt="">
              <p class="text-gray-500">Course empty...</p>
              <a class="text-blue-500" href="{{url('/elerning')}}">View the course</a>
            </div>
            {{-- @endif --}}
        </div>

      </div>
      <!-- endbox-mycourse -->
    </div>
    <!-- endbox -->
</div>

@endsection
@section('be-scripts')
<script>

</script>
@endsection