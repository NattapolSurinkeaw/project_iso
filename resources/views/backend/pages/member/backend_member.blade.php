@extends('backend.layouts.main')
@section('title') Member @endsection
@section('container')

<div class="overflow-hidden">
    <h1 class="text-center text-2xl font-bold my-3">Member</h1>
    <div class="h-[780px] max-2xl:h-[670px] mx-10 p-4 bg-gray-300 rounded-lg overflow-y-scroll overflow-hidden shadow-2xl">
        <div class="flex flex-wrap gap-3">
            @foreach($users as $member)
            <div class="w-72 bg-white shadow-xl rounded-lg py-3">
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