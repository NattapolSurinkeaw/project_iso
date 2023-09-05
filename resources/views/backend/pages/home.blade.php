@extends('backend.layouts.main')
@section('title') Dashboard @endsection
@section('container')

<div class="p-10">
    <h1 class="text-2xl font-bold">Dashboard</h1>

    <div class="my-4 grid grid-cols-4 gap-10">
        <div class="h-30 p-4 bg-red-300 rounded-lg">
            <h1>Member</h1>
            <div class="flex justify-between items-center">
                <h1 class="text-4xl">{{$data['user']}}</h1>
                <div><img class="w-20 h-20" src="/image/icon/member.png" alt=""></div>
            </div>
        </div>
        <div class="h-30 p-4 bg-green-300 rounded-lg">
            <h1>Course</h1>
            <div class="flex justify-between items-center">
                <h1 class="text-4xl">{{$data['course']}}</h1>
                <div><img class="w-16 h-16" src="/image/icon/course.png" alt=""></div>
            </div>
        </div>
        <div class="h-30 p-4 bg-blue-300 rounded-lg">
            <h1>Training</h1>
            <div class="flex justify-between items-center">
                <h1 class="text-4xl">{{$data['training']}}</h1>
                <div><img class="w-20 h-14" src="/image/icon/training1.png" alt=""></div>
            </div>
        </div>
        <div class="h-30 p-4 bg-yellow-300 rounded-lg">
            <h1>News And Event</h1>
            <div class="flex justify-between items-center">
                <h1 class="text-4xl">{{$data['news']}}</h1>
                <div><img class="w-14 h-14" src="/image/icon/news.png" alt=""></div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('be-scripts')
<script>

</script>
@endsection
