@extends('backend.layouts.main')
@section('title') Member @endsection
@section('container')

<div class="overflow-hidden">
    <h1 class="text-center text-2xl font-bold">Member</h1>
    <div class="mx-10 my-5 flex justify-between text-lg">
        <h1>Name</h1>
        <h1>Actions</h1>
    </div>
    <div class="h-[780px] mx-10 p-4 bg-gray-300 rounded-lg overflow-y-scroll shadow-2xl">
        <ul role="list" class="divide-y divide-gray-100">
            @foreach($users as $member)
                <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    @if(!empty($member->img_profile))
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{$member->img_profile}}" alt="">
                    @else
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/image/icon/user.png" alt="">
                    @endif
                    <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{$member->name}}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$member->email}}</p>
                    <p class="text-sm leading-6 text-gray-900">{{$member->role}}</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <button class="px-2 bg-orange-400 text-white rounded-lg">แก้ไข</button>
                    <button class="px-4 bg-red-500 text-white rounded-lg">ลบ</button>
                </div>
                </li>
            @endforeach
          </ul>
    </div>
</div>

@endsection

@section('be-scripts')
<script>

</script>
@endsection