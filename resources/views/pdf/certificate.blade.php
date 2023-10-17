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
    @page {
        margin: 0 !important;
    }
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
        background-image: url('image/background/border-certificate.jpg'); /* ใช้รูปภาพเป็นพื้นหลัง */
        background-size: 100% 100%; /* ปรับขนาดรูปภาพให้เต็มหน้าจอ */
        background-origin: content-box; /* ไม่รวมขอบขาวที่ปรากฏ */
    }
    .page-break {
        page-break-after: always;
    }
    .container {
        padding-top:150px;
        text-align: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวนอน */
        height: 100dvh; /* ใช้ความสูงของ viewport เพื่อให้เนื้อหาอยู่ตรงกลางแนวตั้ง */
        display: flex;
        flex-direction: column;
        justify-content: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวตั้ง */
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
</style>
<body>
    {{-- <div class="header-img">
        <img src="{{ public_path('image/icon/isologo.png')}}" alt="">
    </div> --}}
    <div class="container">
        <img src="image/icon/isologo.png">
        <h1 style="margin-top: 40px;">ISOConsult Company</h1>
        <h2 style="margin-top: 40px;">CERTIFICATE OF EXCELLENCE</h2>
        <h3 style="margin-top: 40px;">is hereby granted to:</h3>
        <div class="box-present">
            <h1 class="present-name">{{$user->name}}</h1>
        </div>
        <h3 style="margin-top: 70px;">for outstanding performance in</h3>
        <h3 style="margin-top: 40px;">ELEARNING COURSE</h3>
    </div>
    <h1>สวัสดีครับ</h1>
    {{-- <h1>Page 1</h1>
    <div class="page-break"></div>
    <h1>Page 2</h1> --}}
</body>
</html>