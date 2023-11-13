@extends('backend.layouts.main')
@section('title') Create Training @endsection
@section('container')

<div class="h-screen overflow-auto">
    <div class="w-[90%] flex flex-col gap-5">

        <div class="mx-10 my-4 flex justify-between items-center">
            <h2 class="text-xl font-bold">HOME CONTENT</h2>
        </div>

        <div class="mx-10 bg-white p-4 border-t-4 border-indigo-500 overflow-hidden rounded-lg">
            <h2 class="text-xl font-bold mb-2">IMAGE BANNER </h2>
            <div class="flex flex-col 2xl:justify-center gap-4">
                @foreach($banners as $banner)
                <div class="bg-[#f4f4f4] w-full flex justify-between items-center p-2 rounded-lg" style="filter: drop-shadow(0px 0px 2px rgba(7, 49, 88, 0.4));">
                    <div class="flex gap-4">
                        <img class="w-40 h-20 duration-300 rounded-lg"src="{{$banner->thumbnail}}">
                        <div class="flex flex-col">
                            <p>{{$banner->title}}</p>
                            <p class="text-gray-400">{{$banner->created_at}}</p>
                        </div>
                    </div>
                    <button id="edit-benner" data-id="{{$banner->id}}" class="bg-green-600 text-white text-xl py-1 px-3 rounded-lg">แก้ไข</button>
                </div>
                @endforeach 
            </div>
        </div>


        <div class="mx-10 bg-white p-4 border-t-4 border-yellow-500 overflow-hidden overflow-x-scroll rounded-lg">
            <h2 class="text-xl font-bold">HOME VIDEO</h2>
            <div class="flex 2xl:justify-center gap-4">
                @foreach($homeVideos as $homeVideo)
                <div class="w-64 flex flex-col justify-center items-center p-2 border hover:shadow-lg hover:shadow-red-300 rounded-lg ">
                    <div id="getVideo" video-id="{{$homeVideo->id}}" class="w-60 overflow-hidden rounded-lg">
                    <img class="w-60 h-40 duration-300 rounded-lg"src="{{$homeVideo->thumbnail}}" data-type={{$homeVideo->type_input}}>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>

        <div class="mx-10 bg-white p-4 border-t-4 border-blue-500 overflow-hidden overflow-x-scroll rounded-lg">
            <h2 class="text-xl font-bold">HOME DOCUMENT</h2>
            <div class="flex 2xl:justify-center gap-4">
                @foreach($homeDocuments as $doc)
                <div data-id="{{$doc->id}}" id="homeDoc" class="w-64 flex flex-col justify-center items-center p-2 border hover:shadow-lg hover:shadow-red-300 rounded-lg">
                    <div class="w-60 overflow-hidden rounded-lg">
                    @if(!empty($doc->thumbnail))
                    <img class="w-60 h-40 duration-300 rounded-lg "
                        src="{{$doc->thumbnail}}" alt="">
                    @else
                    <img class="w-60 h-40 duration-300 rounded-lg "
                        src="/image/icon/isologo.png" alt="">
                    @endif
                    </div>
                    <h2 class="font-normal">{{$doc->name}}</h2>
                </div>
                @endforeach 
            </div>
        </div>

    </div>
</div>

@endsection
@section('be-scripts')
<script>
    let videoLinks = document.querySelectorAll('#getVideo');
    let documentHome = document.querySelectorAll('#homeDoc');

    videoLinks.forEach(videoLink => {
        videoLink.addEventListener('click', function() {
            let videoId = this.getAttribute('video-id');
            editVideo(videoId)
            // คุณสามารถทำสิ่งอื่น ๆ กับ videoId ที่ได้ที่นี่ เช่น เปิดหน้าใหม่ในการดูวิดีโอหรือทำการข้อความแสดงหน้าเว็บ
        });
    });


    documentHome.forEach(homeDocument => {
        homeDocument.addEventListener('click', function() {
            let doc_id = this.getAttribute('data-id');
            editDocument(doc_id)
            // คุณสามารถทำสิ่งอื่น ๆ กับ videoId ที่ได้ที่นี่ เช่น เปิดหน้าใหม่ในการดูวิดีโอหรือทำการข้อความแสดงหน้าเว็บ
        });
    });
    
    function editVideo(videoId) {
        console.log('คุณคลิกที่วิดีโอ ID: ' + videoId);
        axios.get(`/api/backend/getvideo/${videoId}`).then((response) => {
            let data = response.data.data;
            console.log(data);
            Swal.fire({
            title: "Create Quiz",
            html: `   <div class="flex items-center gap-4">
                        <label for="video">video url</label>
                        <input type="text" id="video" class="swal2-input" value="${data.url}">
                      </div>
                      <div class="flex items-center gap-4 ">
                        <label for="video">thumbnail</label>
                        <input type="file" id="thumbnail" class="swal2-input">
                      </div>
                      <div class="flex items-center gap-4 >
                        <label for="video">input type</label>
                        <select id="input-type">
                            <option value="youtube">Youtube</option>
                            <option value="drive">GoogleDrive</option>
                            <option value="vimeo">Vimeo</option>
                        </select>
                      </div>
                    `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                const video_url = Swal.getPopup().querySelector("#video").value;
                const thumbnail = Swal.getPopup().querySelector("#thumbnail");
                let thumbFile = thumbnail.files[0];
                const input_type = Swal.getPopup().querySelector("#input-type").value;

                //   if (!video || !document) {
                //       Swal.showValidationMessage(`Please enter your data.`);
                //       return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                //   }

                formData = new FormData();
                formData.append('video_url', video_url),
                formData.append('thumbnail', thumbFile),
                formData.append('input_type', input_type)
                return formData;
            },
            customClass: {
                popup: 'custom-popup-homeVideo', // ปรับแต่งคลาส CSS ของ Popup
            },
            }).then((result) => {
                if (result.isConfirmed) {
                    const param = result.value;
                    param.forEach((value, key) => {
                        console.log(key + ': ' + value);
                    });
                    axios.post(`/api/backend/editvideo/${videoId}`, param)
                        .then((response) => {
                            console.log(response)
                            if(response.data.status == 'success') {
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1000
                                }).then(() => {
                                    location.reload()
                                });
                            } else {
                                console.log(response.data.status)
                            }
                        })
                        .catch((error) => {
                            console.error('API Error:', error);
                            // จัดการข้อผิดพลาด
                        });
                }
            });
        })
        
    }

    function editDocument(doc_id) {
        console.log(doc_id)
        axios.get(`/api/backend/getdocument/${doc_id}`).then((response) => {
            let data = response.data.data;
            console.log(data);
            Swal.fire({
            title: "Create Quiz",
            html: `   <div class="flex items-center gap-4">
                        <label for="name-doc">title</label>
                        <input type="text" id="name-doc" class="swal2-input" value="${data.name}">
                      </div>
                      <div class="flex items-center gap-4">
                        <label for="description">description</label>
                        <input type="text" id="description" class="swal2-input" value="${data.description}">
                      </div>
                      <div class="flex items-center gap-4 ">
                        <label for="document-file">document</label>
                        <input type="file" id="document-file" class="swal2-input">
                      </div>
                      <div class="flex items-center gap-4 ">
                        <label for="thumbnail">thumbnail</label>
                        <input type="file" id="thumbnail" class="swal2-input">
                      </div>
                    `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                const name_doc = Swal.getPopup().querySelector("#name-doc").value;
                const description = Swal.getPopup().querySelector("#description").value;
                const document = Swal.getPopup().querySelector("#document-file");
                let documentFile = document.files[0];
                const thumbnail = Swal.getPopup().querySelector("#thumbnail");
                let thumbFile = thumbnail.files[0];

                //   if (!video || !document) {
                //       Swal.showValidationMessage(`Please enter your data.`);
                //       return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                //   }

                formData = new FormData();
                formData.append('name_doc', name_doc),
                formData.append('description', description),
                formData.append('documentFile', documentFile)
                formData.append('thumbFile', thumbFile)
                return formData;
            },
            customClass: {
                popup: 'custom-popup-homeVideo', // ปรับแต่งคลาส CSS ของ Popup
            },
            }).then((result) => {
                if (result.isConfirmed) {
                    const param = result.value;
                    // param.forEach((value, key) => {
                    //     console.log(key + ': ' + value);
                    // });
                    axios.post(`/api/backend/editdocument/${doc_id}`, param)
                        .then((response) => {
                            console.log(response)
                            if(response.data.status == 'success') {
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1000
                                }).then(() => {
                                    location.reload()
                                });
                            } else {
                                console.log(response.data.status)
                            }
                        })
                        .catch((error) => {
                            console.error('API Error:', error);
                            // จัดการข้อผิดพลาด
                        });
                }
            });
        })
    }
</script>
@endsection