@extends('layouts.main')
@section('title') CartPage @endsection
@section('content')
  <div class="pt-32">
    <div class="m-10 p-10 border rounded-xl shadow-md">
      <h1 class="text-3xl text-center font-bold mb-4">รายละเอียดคำสั่งซื้อ</h1>
      <hr class="border">

      <div class="p-10">
        <div class="flex justify-around p-5">
          <h1>React JS 20 Workshop</h1>
          <h1>THB349</h1>
        </div>
        <div class="flex justify-around p-5">
          <h1>React JS 20 Workshop</h1>
          <h1>THB349</h1>
        </div>
        <div class="flex justify-around p-5">
          <h1>React JS 20 Workshop</h1>
          <h1>THB349</h1>
        </div>
      </div>
      <hr class="border">
      <h1 class="text-3xl text-center font-bold my-4">ยอดชำระ 1,047.00 THB</h1>
      <h1 class="text-xl text-center my-10">ชื่อ บริษัท ISOconsult.org</h1>
      <div class="flex flex-col items-center gap-5">
        <div class="flex items-center bg-gray-300 rounded-full drop-shadow-lg">
          <img class="h-14 w-14 rounded-full" src="https://nbtworld.prd.go.th/dc/transcode/image/2563/4/27/e2ebfc05ee2ef2f857e124957714d1c1_small.jpg" alt="">
          <h1 class="px-10 text-xl font-bold">XXXX - XXXX - XXXX</h1>
        </div>
        <div class="flex items-center bg-gray-300 rounded-full drop-shadow-lg">
          <img class="h-14 w-14 rounded-full" src="data:image/png;base64,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" alt="">
          <h1 class="px-10 text-xl font-bold">XXXX - XXXX - XXXX</h1>
        </div>
      </div>
    </div>

    <div class="m-10 p-10 flex flex-col items-center gap-10 justify-center border rounded-xl shadow-md">
      <h1 class="text-xl">กรุณาแนบสลิป</h1>
      <img class="h-96 w-64 border" id="output" src="https://png.pngtree.com/png-vector/20191021/ourlarge/pngtree-upload-vector-icon-with-transparent-background-png-image_1836029.jpg" alt="payment"/>
      <input class="text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept="image/*" type='file' id="imgInp" />
    </div>

    <div class="flex justify-center mb-3">
      <button class="py-2 px-5 bg-red-700 text-white rounded-3xl hover:bg-red-600">ยืนยัน</button>
    </div>
  </div>
@endsection

@section('scripts')
<script>
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    output.src = URL.createObjectURL(file)
  }
}
</script>
@endsection