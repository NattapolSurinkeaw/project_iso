<!DOCTYPE html>
<html>

<head>
    <title>Confirm reserve</title>
    @vite('resources/css/app.css')
</head>

<body>
    <center>
        <h1 style="background: red;color: white;">ISOConsult</h1>
        <div style="width:750px">
          <p style="text-align: center;"><b>ใบแจ้งรายละเอียด</b></p>
          <p style="text-align: start; padding:3px;">ลูกค้า / customer : {{ $pendingtrain->reserve_name }}</p>
          <p style="text-align: start; padding:3px;">ที่อยู่ / address : {{ $pendingtrain->address }}</p>
          <p style="text-align: start; padding:3px;">อีเมล / email : {{ $pendingtrain->email }}</p>
          <p style="text-align: start; padding:3px;">เบอร์โทร / phone : {{ $pendingtrain->reserve_tel }}</p>
          <p style="text-align: start; padding:3px;">จำนวนที่นั่ง / number of participants : {{ $pendingtrain->number_participants }}</p>
          <hr style="margin: 10px 0">
          <table style="border: 1px solid black">
            <thead>
              <tr style="border-bottom:1px solid black">
                <th style="width:90px; padding:3px; border-right: 1px solid black;">ลำดับ / No.</th>
                <th style="width:80px; padding:3px; border-right: 1px solid black;">code</th>
                <th style="width:300px; padding:3px; border-right: 1px solid black;">Course</th>
                <th style="width:100px; padding:3px; border-right: 1px solid black;">date</th>
                <th style="width:100px; padding:3px; border-right: 1px solid black;">fee</th>
              </tr>
            </thead>
            <tbody>
                @php
                  $i = 1;
                  $total = $pendingtrain->fee;
                @endphp
                <tr>
                  <td style="width:90px; padding:3px; text-align:center;  border-right: 1px solid black">
                    {{ $i++ }}</td>
                  <td style="width:90px; padding:3px; text-align:center; border-right: 1px solid black;">
                    {{ $pendingtrain->code_train }}</td>
                  <td style="width:300px; padding:3px; text-align:center; border-right: 1px solid black;">
                    {{ $pendingtrain->training_reserve }}</td>
                  <td style="width:130px; padding:3px; text-align:center; border-right: 1px solid black;">
                    {{ \Carbon\Carbon::parse($pendingtrain->date_reserve)->format('d-m-Y') }}</td>
                  <td style="width:100px; padding:3px; text-align:center; border-right: 1px solid black;">
                    {{ $pendingtrain->fee }}</td>
                </tr>
                @foreach ($otherTrainings as $oth)
                    @php
                      $total += $oth->fee;
                    @endphp
                    <tr>
                      <td style="width:90px; text-align:center;  border-right: 1px solid black;">
                        {{ $i++ }}</td>
                      <td style="width:90px; text-align:center; border-right: 1px solid black;">
                        {{ $oth->code }}</td>
                      <td style="width:300px; text-align:center; border-right: 1px solid black;">
                        {{ $oth->name }}</td>
                      <td style="width:130px; text-align:center; border-right: 1px solid black;">
                        {{ \Carbon\Carbon::parse($oth->other_date)->format('d-m-Y') }}</td>
                      <td style="width:100px; text-align:center; border-right: 1px solid black;">
                        {{ $oth->fee }}</td>
                    </tr>
                @endforeach
                <tr>
                  <td style="height: 80px; border-right: 1px solid black;"></td>
                  <td style="height: 80px; border-right: 1px solid black;"></td>
                  <td style="height: 80px; border-right: 1px solid black;"></td>
                  <td style="height: 80px; border-right: 1px solid black;"></td>
                  <td style="height: 80px; border-right: 1px solid black;"></td>
                </tr>
                <tr style="border-top: 1px solid black">
                  <td style=" border-right: 1px solid black; text-align: center;">ราคารวม</td>
                  <td colspan="4" style="text-align: center">{{ $total }} บาท</td>
                </tr>
            </tbody>
          </table>
          <p>your reservation training is success click here <a href="http://127.0.0.1:8000/reservationhistory"style="color: blue">see more</a> for see more</p>
        </div>
    </center>
</body>

</html>
