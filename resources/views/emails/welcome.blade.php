<!DOCTYPE html>
<html>
<head>
    <title>Confirm reserve</title>
    @vite('resources/css/app.css')
</head>
<body>
  <center>
    <h1 style="background: red;color: white;">ISOConsult</h1>
  </center>
  <center>
  <div style="width:500px">
    <p style="text-align: start">ลูกค้า / customer : {{$pendingtrain->reserve_name}}</p>
    <p style="text-align: start">ที่อยู่ / address : {{$pendingtrain->address}}</p>
    <p style="text-align: start">อีเมล / email : {{$pendingtrain->email}}</p>
    <p style="text-align: start">เบอร์โทร / phone : {{$pendingtrain->reserve_tel}}</p>
    <p style="text-align: start">จำนวนที่นั่ง / number of participants : {{$pendingtrain->number_participants}}</p>
    <hr style="margin: 10px 0">
      <table style="border: 1px solid black">
        <thead>
          <tr>
            <th style="width:50px">ลำดับ / No.</th>
            <th style="width:80px">Course</th>
            <th style="width:50px">date</th>
            <th style="width:50px">fee</th>
          </tr>
        </thead>
        <tbody>
          @php    
            $i = 1;
          @endphp
          <tr>
            <td style="width:150px; text-align:center;">{{$i++}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->training_reserve}}</td>
            <td style="width:150px; text-align:center;">{{$pendingtrain->date_reserve}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->fee}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->name}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->training_detail}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->fee}}</td>
          </tr>
          <tr>
            @foreach($otherTrainings as $other)
            <td style="width:150px; text-align:center;">{{$i++}}</td>
            <td style="width:90px; text-align:center;">{{$other->other_course}}</td>
            <td style="width:150px; text-align:center;">{{$other->other_date}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->fee}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->name}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->training_detail}}</td>
            <td style="width:90px; text-align:center;">{{$pendingtrain->fee}}</td>
            @endforeach
          </tr>
        </tbody>
      </table>
      <p>your reservation training is success click here <a href="http://127.0.0.1:8000/reservationhistory" style="color: blue">see more</a> for see more</p>
    </center>
    </div>
</body>
</html>