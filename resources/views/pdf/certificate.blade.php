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
    .page-break {
        page-break-after: always;
    }
</style>
<body>
    {{-- <img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt=""> --}}
    <div style="width:200px; background-image: url('/image/icon/isologo.png')"></div>
    <img src="{{ public_path('image/icon/isologo.png')}}" alt="">
    <h1>well come PDF</h1>
    {{$user}}

    {{-- <h1>Page 1</h1>
    <div class="page-break"></div>
    <h1>Page 2</h1> --}}
</body>
</html>