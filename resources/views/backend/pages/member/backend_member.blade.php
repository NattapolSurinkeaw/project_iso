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
        {{-- <ul role="list" class="divide-y divide-gray-100">
            @foreach($users as $member)
                <li class="flex justify-between gap-x-6 py-5">
                <div class="flex items-center min-w-0 gap-x-4">
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
                <div class="flex flex-col gap-1">
                    <button class="py-1 px-2 bg-blue-500 text-white rounded-lg">รายละเอียด</button>
                    <button class="py-1 px-2 bg-yellow-500 text-white rounded-lg">แก้ไข</button>
                    <button class="py-1 px-2 bg-red-500 text-white rounded-lg">ลบ</button>
                </div>
                </li>
            @endforeach
          </ul> --}}

        <div class="flex gap-3 flex-wrap">
            @foreach($users as $member)
            <div class="bg-white shadow-xl rounded-lg py-3">
                <div class="flex justify-center p-4">
                    @if(!empty($member->img_profile))
                        <img class="h-20 w-20 flex-none rounded-full bg-gray-50" src="{{$member->img_profile}}" alt="">
                    @else
                        <img class="h-20 w-20 flex-none rounded-full bg-gray-50" src="/image/icon/user.png" alt="">
                    @endif
                </div>
                <div class="p-2">
                    <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{$member->name}}</h3>
                    <div class="text-center text-gray-400 text-xs font-semibold">
                        <p>{{$member->role}}</p>
                    </div>
                    <table class="text-xs my-3">
                        <tbody>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                <td class="px-2 py-2">{{$member->email}}</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                <td class="px-2 py-2">Chatakpur-3, Dhangadhi Kailali</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                                <td class="px-2 py-2">+977 9955221114</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center my-3">
                        <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="memberdetail/{{$member->id}}">View Profile</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection

@section('be-scripts')
<script>

</script>
@endsection