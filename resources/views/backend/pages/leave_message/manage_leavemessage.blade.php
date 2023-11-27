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
                    <button id="btn-list" class="py-2 border-l-4 border-green-500">ข้อความ</button>
                    <button id="btn-star" class="py-2">ติดดาว</button>
                </div>
            </div>

            <div class="w-full h-[500px] bg-white border-t-4 border-indigo-500 overflow-hidden rounded-lg">
                <div class="m-4" id="list-message">
                    <h2 class="text-xl font-bold mb-2">Message</h2>
                    <div class="flex flex-col 2xl:justify-center gap-4">
                        @foreach($message as $mess)
                        <div id="message" data-id="{{$mess->id}}" class="bg-[#f4f4f4] w-full grid grid-cols-[50px,1fr,1fr,1fr] p-2 rounded-lg" style="filter: drop-shadow(0px 0px 2px rgba(7, 49, 88, 0.4));">
                            <div id="follow"><box-icon name='star' type="solid"></box-icon></div>
                            <div>{{$mess->fname_lname}}</div>
                            <div>{{$mess->organiz}}</div>
                            <div>{{$mess->created_at}}</div>
                        </div>
                        @endforeach 
                    </div>
                </div>
                <div id="message-detail">
                    
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
    const btn_list = document.querySelector('#btn-list')
    const list_message = document.querySelector('#list-message')
    const message_detail = document.querySelector('#message-detail');

    message.addEventListener('click', () => {
        const data_id = message.getAttribute('data-id');
        contentMessage(data_id)
    })

    follow.addEventListener('click', () => {
        updateMessage()
    })

    btn_list.addEventListener('click', () => {
        message_detail.classList.add('hidden')
        list_message.classList.remove('hidden')
    })

    function contentMessage(data_id) {
        console.log("get message"+ data_id)
        list_message.classList.add('hidden')

        axios.get(`/api/backend/getmessage/${data_id}`).then((response) => {
            let data = response.data.data;
            if(response.data.status == 'success') {
                createContent(data)
            }
        })
    }

    function createContent(data) {
        console.log(data)
        let content = `
                        <div class="flex flex-col gap-2">
                            <div class="w-full text-xl p-4">
                                isoconsult.shop
                            </div>
                            <hr>
                            <div class="grid grid-cols-[2fr,1fr,100px] gap-4 m-4">
                                <div class="flex gap-4">
                                    <h2>${data.fname_lname}</h2>
                                    <h2>${data.phone_number}</h2>
                                </div>
                                <p>${data.email}</p>
                                <p>${data.created_at}</p>
                            </div>
                            <hr>
                            <div class="mx-4">
                                <textarea class="border border-blue-200 w-full rounded-lg" name="" id="" cols="30" rows="10">${data.leave_message}</textarea>
                            </div>
                        </div>
                    `;
        console.log(message_detail)
        message_detail.classList.remove('hidden')
        message_detail.innerHTML = content
    }

    function updateMessage() {
        console.log("follow message")
    }
</script>
@endsection