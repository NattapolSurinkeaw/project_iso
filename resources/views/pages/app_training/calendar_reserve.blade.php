@extends('layouts.main')
@section('title') Reserve Day @endsection
@section('content')
  <div class="w-10/12 mt-20 mx-auto">
    <div class="">
        <h1 class="text-2xl text-center">Reserve Day</h1>
        <h1 class="text-xl text-center">Course : {{$training->name}}</h1>
    </div>
    <div id='calendar-train'></div>
  </div>
@endsection

@section('scripts')
<script>
  let trains = {!! json_encode($trainings) !!}
  console.log(trains)

    document.addEventListener('DOMContentLoaded', function() {
      let calendarEl = document.querySelector('#calendar-train');
      let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true, // เพิ่มค่า selectable: true เพื่อให้สามารถเลือกวันที่ได้
        events: function(info, successCallback, failureCallback) {
          let events = [];

          // วนลูปผ่านข้อมูล trains และเพิ่มข้อมูล events ตามความเหมาะสม
          trains.forEach(function(train) {
            events.push({
              title: train.name, // ใช้ชื่อของการฝึกอบรมเป็น title
              start: train.date, // ใช้วันที่ใน train.date เป็นวันเริ่มต้น
              // คุณสามารถเพิ่ม properties อื่น ๆ ตามต้องการ เช่น description
              // description: train.training_detail
            });
          });

          // เรียกใช้งาน successCallback เพื่อโหลดข้อมูล events ลงในปฏิทิน
          successCallback(events);
        },
        select: function(info) {
          let selectedDate = info.start;
          let formattedDate = selectedDate.toISOString().split('T')[0]; // แปลงวันที่เป็นรูปแบบ 'YYYY-MM-DD'
          let courseId = "{{ $train_id }}";
        
          window.location.href = "/trainingform?date=" + formattedDate + "&course_id=" + courseId; // ตัวแปร info.start เก็บวันที่ที่เลือก
          console.log('Selected date: ', courseId);
        }
      });
      calendar.render();

    });

</script>
@endsection