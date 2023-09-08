@extends('backend.layouts.main')
@section('title') PendingCourse @endsection
@section('container')

<div class="overflow-hidden">
    <h1 class="text-center text-2xl font-bold">PendingCourse</h1>
    <div class="relative h-4/5 my-10 overflow-y-scroll mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center rounded-tl-lg">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        img
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        updated_at
                    </th>
                    <th scope="col" class="px-6 py-3 text-center rounded-tr-lg">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($courses as $course) --}}
                <tr class="bg-white dark:bg-gray-800 border-b-2">
                    <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                        {{-- {{$course->id}} --}}
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{-- {{$course->course_name}} --}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{-- {{$course->price}} --}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{-- {{$course->description}} --}}
                    </td>
                    <td class="px-6 py-4">
                        {{-- @if(!empty($course->img_course) && $course->img_course !== 'null') --}}
                        {{-- <img class="w-20 h-20" src="{{$course->img_course}}" alt=""> --}}
                        {{-- @else --}}
                        <img class="w-20 h-20" src="/image/icon/isologo.png" alt="">
                        {{-- @endif --}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{-- {{$course->updated_at}} --}}
                    </td>
                    <td class="px-6 py-4">
                        <a class="bg-green-600 p-2 rounded-lg text-white w-24 text-center" href="/backend/coursedetail/">สมาชิก</a>
                        <a class="bg-blue-600 p-2 rounded-lg text-white w-24 text-center" href="/backend/coursedetail/">รายละเอียด</a>
                        <button class="bg-yellow-500 p-2 rounded-lg text-white text-center" data-id="" id="editCourse">แก้ไข</button>
                        <button class="bg-red-600 p-2 rounded-lg text-white text-center" data-id="" id="delCourse">ลบ</button>
                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('be-scripts')
<script>


</script>

@endsection