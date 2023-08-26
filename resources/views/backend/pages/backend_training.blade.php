@extends('backend.layouts.main')
@section('title') Training @endsection
@section('container')

<div class="">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Course</h1>
        <button type="button" id="create-course" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
    </div>
    
    <div class="relative h-screen h-[700px] my-10 overflow-y-scroll mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-tl-lg">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Module
                    </th>
                    <th scope="col" class="px-6 py-3">
                        code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        day
                    </th>
                    <th scope="col" class="px-6 py-3">
                        fee
                    </th>
                    <th scope="col" class="px-6 py-3">
                        img_training
                    </th>
                    <th scope="col" class="px-6 py-3">
                        date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        updated_at
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-tr-lg">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($trainingcourses as $trainingcourse)
                <tr class="bg-white dark:bg-gray-800 border-b-2">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                        {{$trainingcourse->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$trainingcourse->module_id}}
                    </td>
                    <td class="px-6 py-4">
                        {{$trainingcourse->code}}
                    </td>
                    <td class="px-6 py-4">
                        {{$trainingcourse->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$trainingcourse->day}}
                    </td>
                    <td class="px-6 py-4">
                        {{$trainingcourse->fee}}
                    </td>
                    <td class="px-6 py-4">
                        @if(!empty($trainingcourse->img_training))
                        <img class="w-20 h-20" src="{{$trainingcourse->img_training}}" alt="">
                        @else
                        <img class="w-20 h-20" src="/image/icon/isologo.png" alt="">
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        {{$trainingcourse->date}}
                    </td>
                    <td class="px-6 py-4">
                        @if(!empty($trainingcourse->updated_at))
                        {{$trainingcourse->updated_at}}
                        @else
                        null
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <a href="/backend/coursedetail/">ลายละเอียด</a>
                        <button data-id="" id="editCourse">แก้ไข</button>
                        <button>ลบ</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('be-scripts')
<script>


</script>

@endsection