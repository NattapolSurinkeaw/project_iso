@extends('layouts.main')
@section('title') Reserve Day @endsection
@section('content')
  <div class="w-10/12 my-4 mx-auto">
    <div class="flex justify-between items-center mb-4">
        <div class="m-2">
          <a href="{{url('/training')}}" class="bg-red-500 text-white rounded-lg py-1 px-2">BACK</a>
        </div>
        <div>
          <h1 class="text-2xl text-center">Reserve Day</h1>
          <h1 class="text-xl text-center">Course : {{$training->name}}</h1>
        </div>
        <div></div>
    </div>
    <div id='calendar-train'></div>
  </div>
@endsection

@section('scripts')
<script>
  let trains = {!! json_encode($trainings) !!}
  let allreserve = {!! $eventreserve !!}
  let courseId = "{{ $train_id }}";
  console.log(allreserve)

  let calendarEl = document.querySelector('#calendar-train');
  document.addEventListener('DOMContentLoaded', function() {
  let calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    selectable: true,
    events: function(info, successCallback, failureCallback) {
      let events = [];

      // วนลูปผ่านข้อมูล trains และเพิ่มข้อมูล events ตามความเหมาะสม
      trains.forEach(function(train) {
        events.push({
          title: train.name,
          start: train.date,
          color: 'red'
        });
      });

      allreserve.forEach(function(reserve) {
        events.push({
          title: reserve.reserve_name,
          start: reserve.reserve_date,
          color: 'sky-blue'
        });
      });

      successCallback(events);
    },
    select: function(info) {
      let selectedDate = info.start;
      let formattedDate = selectedDate.toISOString().split('T')[0];

      let isEventExists = calendar.getEvents().some(event => {
        return event.start.toISOString().split('T')[0] === formattedDate;
      });

      if (isEventExists) {
        alert('ไม่สามารถเลือกวันที่นี้ได้ เนื่องจากมีอบรมอยู่แล้ว');
      } else {
        window.location.href = "/trainingform?date=" + formattedDate + "&course_id=" + courseId;
        console.log('Selected date: ', formattedDate);
      }
    }
  });

  calendar.render();
});

  const isTouchscreen = window.matchMedia('(hover: none)').matches;

  if (isTouchscreen) {
    calendarEl.addEventListener('click', () => {
      Swal.fire({
        title: 'กรุณาเลือกวันที่',
        input: 'date', // กำหนด input ให้เป็น 'date'
        showCancelButton: true,
        confirmButtonText: 'ตกลง',
        cancelButtonText: 'ยกเลิก',
        inputValidator: (value) => {
          if (!value) {
            return 'กรุณาเลือกวันที่'; // ข้อความแสดงเมื่อไม่ได้เลือกวันที่
          }
        }
      }).then((result) => {
        if (result.isConfirmed) {
          const selectedDate = result.value;
          console.log('คุณเลือกวันที่: ' + selectedDate);
          window.location.href = "/trainingform?date=" + selectedDate + "&course_id=" + courseId;
          // ทำอะไรสังเกตการณ์ที่ผู้ใช้เลือกวันที่
        }
      });
    });
  }

</script>
@endsection