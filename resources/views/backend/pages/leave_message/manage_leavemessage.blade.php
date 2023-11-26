@extends('backend.layouts.main')
@section('title') Create Training @endsection
@section('container')

<div class="h-screen mb-4">
    <div class="w-[95%] flex flex-col gap-5">

        <div class="mx-10 my-4 flex justify-between items-center">
            <h2 class="text-xl font-bold">CONTACT MESSAGE</h2>
        </div>

        <div class="flex gap-4 ml-2">
            <div class="w-full h-[200px] max-w-[300px] bg-white rounded-lg">
                <h2 class="text-center text-xl bg-gray-400 py-2 rounded-t-lg">กล่องข้อความ</h2>
                <div class="flex flex-col gap-4 my-1">
                    <button class="py-2 border-l-4 border-green-500">ข้อความ</button>
                    <button class="py-2">ติดดาว</button>
                </div>
            </div>

            <div class="w-full h-[500px] bg-white p-4 border-t-4 border-indigo-500 overflow-hidden rounded-lg">
                <h2 class="text-xl font-bold mb-2">Message</h2>
                <div class="flex flex-col 2xl:justify-center gap-4">
                    @foreach($message as $mess)
                    <div id="message" class="bg-[#f4f4f4] w-full grid grid-cols-[50px,1fr,1fr,1fr] p-2 rounded-lg" style="filter: drop-shadow(0px 0px 2px rgba(7, 49, 88, 0.4));">
                        <div id="follow"><box-icon name='star' type="solid"></box-icon></div>
                        <div>{{$mess->fname_lname}}</div>
                        <div>{{$mess->organiz}}</div>
                        <div>{{$mess->created_at}}</div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('be-scripts')
<script>
    const message = document.querySelector('#message')
    const follow = document.querySelector('#follow')

    message.onclick = () => {
        contentMessage()
    }
    // message.addEventListener('click', () => {
    //     contentMessage()
    // })

    follow.onclick = () => {
        updateMessage()
    }
    // follow.addEventListener('click', () => {
    //     updateMessage()
    // })

    function contentMessage() {
        console.log("get message")
    }

    function updateMessage() {
        console.log("follow message")
    }
</script>
@endsection