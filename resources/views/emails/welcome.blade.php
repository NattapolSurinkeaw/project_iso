<!DOCTYPE html>
<html>
<head>
    <title>Confirm reserve</title>
    @vite('resources/css/app.css')
</head>
<body>
  <center>
    <h1 style="background: red;color: white;">Reserve training Success!</h1>
    <table style="border: 1px solid black">
      <thead>
        <tr>
          <th style="width:50px">ลำดับ</th>
          <th style="width:80px">module id</th>
          <th style="width:50px">code</th>
          <th style="width:50px">name</th>
          <th style="width:50px">training detail</th>
          <th style="width:50px">fee</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="width:50px">{{$course->id}}</td>
          <td style="width:80px">{{$course->module_id}}</td>
          <td style="width:50px">{{$course->code}}</td>
          <td style="width:50px">{{$course->name}}</td>
          <td style="width:50px">{{$course->training_detail}}</td>
          <td style="width:50px">{{$course->fee}}</td>
        </tr>
      </tbody>
    </table>
    <p>your reservation training is success click here <a href="http://127.0.0.1:8000/reservationhistory" style="color: blue">see more</a> for see more</p>
  </center>
</body>
</html>