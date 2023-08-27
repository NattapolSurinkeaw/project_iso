@extends('layouts.main')
@section('title') Reserve Success  @endsection
@section('content')

<div class="w-10/12  mx-auto h-screen flex justify-center items-center">
    <div class="shadow-lg px-60 py-32 rounded-lg">
        <h1 class="text-center text-2xl">Reservation Success</h1>
        <h1 class="text-center text-2xl">Thank you!!</h1>
        <img class="w-96 h-80" src="/image/icon/thankyou.jpg" alt="">
        <a href="{{ url('/reservationhistory')}}"><h1 class="mt-2 text-center text-xl text-blue-700 underline">see reservation</h1></a>
        <div class="flex justify-center mx-auto">
            <button id="btnback" class="mt-4 bg-blue-500 p-2 rounded-lg text-white">Back</button>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    btnback.onclick = env => {
        location.href = "/training"
    }

</script>
@endsection
