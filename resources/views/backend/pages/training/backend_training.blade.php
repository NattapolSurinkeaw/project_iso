@extends('backend.layouts.main')
@section('title') Training @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-medium">Training Course</h1>
        <a href="{{url('/backend/createtraining')}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</a>
    </div>
    
    <div class="mx-10 mb-2">
        <button id="toggleTable" class="p-2 bg-blue-600 texr-white rounded-lg ">Table</button>
        <button id="toggleCalendar" class="p-2 bg-green-600 texr-white rounded-lg ">Calendar</button>
    </div>
    <div id="table-train" class="relative h-4/6 overflow-y-scroll mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
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
                        <p class="w-36">{{$trainingcourse->date}}</p>
                    </td>
                    <td class="px-6 py-4">
                        @if(!empty($trainingcourse->updated_at))
                        <p class="w-36">{{$trainingcourse->updated_at}}</p>
                        @else
                        null
                        @endif
                    </td>
                    <td class="px-6 py-4 flex ites-center gap-1">
                        <a class="bg-blue-600 p-2 rounded-lg text-white w-24 text-center" href="/backend/coursedetail/">ลายละเอียด</a>
                        <a href="{{url('/backend/edittraining')}}/{{$trainingcourse->id}}" class="bg-yellow-500 p-2 rounded-lg text-white text-center" data-id="" id="editCourse">แก้ไข</a>
                        <button onclick="delTraining({{$trainingcourse->id}})"  class="bg-red-600 p-2 rounded-lg text-white text-center">ลบ</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="calendar-train" class="relative h-4/6 overflow-y-scroll mx-10" style="display: none">
        <div id='calendar-admin'></div>
    </div>
</div>


@endsection

@section('be-scripts')
<script>
let trains = {!! $trainingcourses !!}
let allreserve = {!! $eventreserve !!}
console.log(allreserve);

document.getElementById('toggleTable').addEventListener('click', function() {
    var tableDiv = document.getElementById('table-train');
    var calendarDiv = document.getElementById('calendar-train');
    if (tableDiv.style.display === 'none' || tableDiv.style.display === '') {
        tableDiv.style.display = 'block';
        calendarDiv.style.display = 'none';
    }
});

document.getElementById('toggleCalendar').addEventListener('click', function() {
    var calendarDiv = document.getElementById('calendar-train');
    var tableDiv = document.getElementById('table-train');
    if (calendarDiv.style.display === 'none' || calendarDiv.style.display === '') {
        calendarDiv.style.display = 'block';
        tableDiv.style.display = 'none';
    }
    
    let calendarEl = document.querySelector('#calendar-admin');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        events: function(info, successCallback, failureCallback) {
          let events = [];

          trains.forEach(function(train) {
            events.push({
              title: train.name, 
              start: train.date,
              color: 'red', // กำหนดสีเป็นสีแดง
            });
          });

          allreserve.forEach(function(reserve) {
            events.push({
              title: reserve.reserve_name, 
              start: reserve.reserve_date,
              color: 'sky-blue', // กำหนดสีเป็นสีแดง
            });
          });

          successCallback(events);
        },
    });
    calendar.render();
});


function delTraining(train_id) {
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        axios.delete(`/api/backend/deltrain/${train_id}`).then((result) => {
            console.log(result.status);
            if(result.status = 'success') {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                ).then(() => { location.reload();})
            }
        })
    }
    })
}

</script>

@endsection