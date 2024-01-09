@extends('backend.layouts.main')
@section('title') user Elearning @endsection
@section('container')

<div class="pb-10">
    <div class="m-1">
      <a href="{{url('/backend/coruse')}}" class="bg-red-500 text-white text-lg px-2 rounded">กลับ</a>
    </div>
    <h1 class="w-full text-xl font-bold text-center">Detail Course :</h1>
    <ul role="list" class="bg-white divide-y divide-gray-100 mx-auto w-[90%] h-auto min-h-[500px]">
      @if (count($users) > 0)
      @foreach($users as $userData)
        <li class="grid grid-cols-4 gap-x-6 py-5 px-5 2xl:px-10">
            <div class="flex col-span-2 min-w-0 gap-x-4">
              @php
                $user = $userData['user'];
                $userLerning = null;
                foreach ($userData['userLerning'] as $item) {
                    $userLerning = $item;
                }
              @endphp
              @if($user->img_profile)
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ $user->img_profile }}" alt="{{ $user->name }}">
              @else
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/image/icon/user.png" alt="{{ $user->name }}">
              @endif
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $user->name }}</p>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $user->email }}</p>
              </div>
            </div>
            <div class="flex flex-col items-center">
              @if($userLerning)
                <p class="text-sm leading-6">round {{ $userLerning->total_round }}</p>
              @else
                <p class="text-sm leading-6">round 0</p>
              @endif
              @if($userLerning)
                <p class="text-sm leading-6">score {{ $userLerning->score }}/{{ $userLerning->total_score }}</p>
              @else
                <p class="text-sm leading-6">score 0/0</p>
              @endif
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 text-gray-900">{{ $user->role }}</p>
              <p class="text-sm leading-6 text-yellow-400">
                @if($userLerning && $userLerning->certificate == "yes")
                  Finish Studying
                @else
                  Studying
                @endif
              </p>
            </div>
        </li>
        <hr>
      @endforeach
      @else
        <li class="flex justify-center gap-x-6 py-5">
          Course User Empty
        </li>
        <hr>
      @endif
    </ul>
</div>

@endsection

@section('be-scripts')
<script>

</script>
@endsection