@extends('layouts.main')
@section('title') Reserve Day @endsection
@section('content')
  <div class="w-10/12 mt-20 mx-auto">
    <div class="">
        <h1 class="text-2xl text-center">Reserve Day</h1>
        <h1 class="text-xl text-center">Course : {{$course->name}}</h1>
    </div>
    <div id='calendar'></div>
  </div>
@endsection

@section('scripts')
<script>

    document.addEventListener('DOMContentLoaded', function() {
      let calendarEl = document.querySelector('#calendar');
      let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true, // เพิ่มค่า selectable: true เพื่อให้สามารถเลือกวันที่ได้
        select: function(info) {
          let selectedDate = info.start;
          let formattedDate = selectedDate.toISOString().split('T')[0]; // แปลงวันที่เป็นรูปแบบ 'YYYY-MM-DD'
          let courseId = "{{ $course_id }}";
        
          window.location.href = "/trainingform?date=" + formattedDate + "&course_id=" + courseId; // ตัวแปร info.start เก็บวันที่ที่เลือก
          console.log('Selected date: ', courseId);
        }
      });
      calendar.render();
    });

</script>
@endsection