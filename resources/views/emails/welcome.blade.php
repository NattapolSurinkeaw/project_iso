<!DOCTYPE html>
<html>
<head>
    <title>Confirm reserve</title>
    @vite('resources/css/app.css')
</head>
<body>
  <center>
    <h1 style="background: red;color: white;">Reserve training Success!</h1>
    <p>your reservation training is success click here <a href="http://127.0.0.1:8000/reservationhistory" style="color: blue">see more</a> for see more</p>
    <table style="border: 1px solid black">
      <thead>
        <tr>
          <th>ลำดับ</th>
          <th>ชื่อ</th>
          <th>ราคา</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>{{$course}}</td>
          <td>3500</td>
        </tr>
      </tbody>
    </table>
  </center>
</body>
</html>