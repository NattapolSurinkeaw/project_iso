<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /* @page {
        margin: 0 !important;
    } */
    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: bold;
        src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: normal;
        src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: bold;
        src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
    }
    body { 
      font-family: "THSarabunNew";
      /* background-image: url('image/background/border-certificate.jpg'); ใช้รูปภาพเป็นพื้นหลัง */
      /* background-size: 100% 100%; ปรับขนาดรูปภาพให้เต็มหน้าจอ */
      /* background-origin: content-box; ไม่รวมขอบขาวที่ปรากฏ */
    }
    .page-break {
      page-break-after: always;
    }
    .container {
      padding-top:50px;
      height: 100dvh; /* ใช้ความสูงของ viewport เพื่อให้เนื้อหาอยู่ตรงกลางแนวตั้ง */
    }
    img {
      max-width: 100%; /* ปรับขนาดรูปภาพให้พอดีกับ container */
      height: auto;
    }
    .box-present{
      display: flex;
      justify-content: center
    }
    .present-name{
      margin-top: 70px;
      padding: 0 50px;
      font-family: Arial, Helvetica, sans-serif; /* ใช้ Arial หรือฟอนต์ที่เป็นที่รู้จักในระบบ dompdf */
      text-decoration: underline;
      text-transform: uppercase;
      color: rgb(212, 212, 70);
    }

    table.table-fordata > thead > tr > th{
      padding: 4px;
      border:1px solid black;
    }

    table {
      border-collapse: collapse ;
    }
    table.table-bordered > thead > tr > th{
      border:1px solid black;
      padding: 4px;
    }
    table.table-bordered > tbody > tr > td{
      border:1px solid black;
      padding: 4px;
    }
    .table{
      width: 100%;
    }
</style>
<body>
    <div class="container">
      <div style="text-align: center">
        <img src="image/icon/isologo.png">
        <h2 style="">ใบเสนอราคา</h2>
      </div>

      <table class="table table-fordata">
        <tbody>
          <tr>
              <th></th>
              <th style="width: 200px;text-align:start"><p>ใบเสนอราคาที่ 1111</p></th>
          </tr>
          <tr>
            <th></th>
            <th style="width: 200px;text-align:start"><p>วันที่ {{ now()->format('d F Y') }} </p></th>
          </tr>
        </tbody>
      </table>
      <h4>เรื่อง การจองอบรม</h4>
      <h4>เรียน คุณ {{$pendingTraining->reserve_name}}</h4>
      <h4>บริษัท/ห้าง/ร้าน ผู้เข้ายื่นข้อเสนอราคา {{$pendingTraining->billingTo->bil_company}}</h4>

      <table class="table table-fordata" style="margin-bottom: 10px">
        <tbody>
          <tr>
            <th></th>
            <th >บริษัท ISOConsult</th>
            <th>อยู่เลขที่ 8080</th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th>ถนน กรุงเทพมหานคร</th>
            <th>ตำบล/แขวง 099999999</th>
            <th>อำเภอ 4455484</th>
          </tr>
          <tr>
            <th>จังหวัด กรุงเทพมหานคร</th>
            <th>โทรศัพท์ 099999999</th>
            <th>เลขประจำตัวผู้เสียภาษี 4455484</th>
          </tr>
        </tbody>
      </table>
    </div>

    <p>รายการหลักสูตรที่จองอบรม</p>
    <table class="table table-bordered" border="1">
      <thead>
          <tr>
              <th>ลำดับ</th>
              <th>หลักสูตร</th>
              <th>วันที่อบรม</th>
              <th>ราคา</th>
          </tr>
      </thead>
      <tbody>
        @php 
          $i = 1; 
          $totalmoney = $pendingTraining->fee;
        @endphp
        <tr>
          <td>{{$i++}}</td>
          <td>{{ $pendingTraining->training_reserve}}</td>
          <td>{{$pendingTraining->date_reserve}}</td>
          <td>{{$pendingTraining->fee}}</td>
        </tr>
        @foreach($otherTrainings as $otherTraining)
        @php $totalmoney += $otherTraining->fee; @endphp
        <tr>
            <td>{{$i++}}</td>
            <td>{{ $otherTraining->name}}</td>
            <td>{{$otherTraining->other_date}}</td>
            <td>{{$otherTraining->fee}}</td>
        </tr>
        @endforeach
        <tr>
          <td>ราคารวม</td>
          <td colspan="3" style="text-align: center">{{$totalmoney}} บาท</td>
        </tr>
      </tbody>
  </table>

  <table class="table" style="margin-top: 30px;">
    <tbody style="">
      <tr>
          <th></th>
          <th style="width: 200px;text-align:start;height: 20px;"><p>ลงชื่อ บริษัท ISOConsult ผู้เสนอราคา</p></th>
      </tr>
      <tr>
        <th></th>
        <th style="width: 200px;text-align:start;height: 20px;"><p>วันที่ {{ now()->format('d F Y') }} </p></th>
      </tr>
    </tbody>
  </table>
    {{-- <h1>Page 1</h1>
    <div class="page-break"></div>
    <h1>Page 2</h1> --}}
</body>
</html>