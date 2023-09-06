@extends('backend.layouts.main')
@section('title') Training @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Course</h1>
        <button type="button" id="createtraining" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
    </div>
    
    <div class="mx-10 mb-2">
        <button class="p-2 bg-blue-600 texr-white rounded-lg ">Table</button>
        <button class="p-2 bg-green-600 texr-white rounded-lg ">Calendar</button>
    </div>
    <div class="relative h-4/5 overflow-y-scroll mx-10">
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
                        <a class="bg-blue-600 p-2 rounded-lg text-white w-24 text-center" href="/backend/coursedetail/">ลายละเอียด</a>
                        <button class="bg-yellow-500 p-2 rounded-lg text-white text-center" data-id="" id="editCourse">แก้ไข</button>
                        <button  class="bg-red-600 p-2 rounded-lg text-white text-center">ลบ</button>
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

createtraining.onclick = env => {
        Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'The function has not yet been activated.',
        cancelButtonColor: '#d33',
        })
    }

</script>

@endsection