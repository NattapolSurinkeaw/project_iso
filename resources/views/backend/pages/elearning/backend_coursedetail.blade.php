@extends('backend.layouts.main')
@section('title')
    Coursedetail
@endsection
@section('container')
<div class="m-2">
    <a href="{{url('/backend/coruse')}}" class="bg-blue-500 text-white rounded-lg py-1 px-2">BACK</a>
</div>

<div class="mx-10 my-4 h-screen">
    <div class="h-4/5 overflow-y-scroll">
        <h1 class="w-full text-xl font-bold text-center">Detail Course : {{ $course->course_name }}</h1>

        <div class="bg-white border-l-8 border-l-indigo-500 rounded-xl p-4 m-10">
            <div class="animate__animated animate__bounce flex justify-between ">
                <img class="h-8" src="/image/icon/category.png" alt="">
                <h1 class="text-xl">Manage Category</h1>
                <button onclick="createCate()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
            </div>
            <hr class="h-px mt-4 bg-gray-200 border-0 dark:bg-gray-700">
            @if (count($cates) > 0)
            <div class="grid grid-cols-3 gap-3 p-4">
                @foreach ($cates as $cate)
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="category" cate_id="{{$cate->id}}" id="category"
                        {{ is_array(json_decode($course->category)) && in_array($cate->id, json_decode($course->category)) ? 'checked' : '' }}>
                    <label id="output-cate" class="" for="category_{{$cate->id}}">{{$cate->category_name}}</label>
                    <input id="input-cate" class="w-40 border hidden" type="text" value="">
                    <div class="flex gap-2">
                        <button class="" id="edit-cate" cate_id="{{$cate->id}}"><img src="/image/icon/penedit.png" class="w-4 h-4" alt=""></button>
                        <button class="" id="delete-cate" cate_id="{{$cate->id}}"><img src="/image/icon/delete.png" class="w-4 h-4" alt=""></button>
                    </div>
                </div>
                @endforeach
            </div>
            <hr>
            <div id="action-cate" class="my-2 w-full flex justify-end gap-2 hidden">
                <button onclick="addcategory()" class="mx-end bg-green-500 text-white rounded-lg py-1 px-3">save</button>
                <button id="hiddenaction" class="mx-end bg-red-500 text-white rounded-lg py-1 px-2">cancle</button>
            </div>
            @else
                <p class="my-4">no category</p>
                <p>null</p>
            @endif
        </div>

        <div class="bg-white border-l-8 border-l-indigo-500 rounded-xl p-4 m-10">
            <div class="animate__animated animate__bounce flex justify-between ">
                <img class="h-8" src="/image/icon/annouce.png" alt="">
                <h1 class="text-xl">Anoucement</h1>
                <button onclick="addAnnouce()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
            </div>
            <hr class="h-px mt-4 bg-gray-200 border-0 dark:bg-gray-700">
            @if (count($announcements) > 0)
                @foreach ($announcements as $announcement)
                    <div class="flex p-4 justify-between items-center">
                        <div class="w-full">
                            <p class="">{!! $announcement->content !!}</p>
                            <p>{{ $announcement->updated_at }}</p>
                        </div>
                        <div class="w-40">
                            <button onclick="editAnnounce({{ $announcement->id }})" class="w-16 p-1 bg-yellow-400 text-white text-center rounded-lg">แก้ไข</button>
                            <button onclick="deleteAnnounce({{ $announcement->id }})" class="w-16 p-1 bg-red-500 text-white text-center rounded-lg">ลบ</button>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @else
                <p class="my-4">no announcement</p>
                <p>null</p>
            @endif
        </div>

        <div class="bg-white border-l-8 border-l-yellow-500 rounded-xl p-4 m-10">
            <div class="animate__animated animate__bounce flex justify-between">
              <img class="h-8" src="/image/icon/material-icon.png" alt="">
              <h1 class="text-xl">Course Material</h1>
              <button onclick="addMaterial()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
            </div>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
      
            @foreach($materials as $item)
            <div class="w-full relative">
                <p class="my-5">{{$item->description}}</p>
                <div class="h-0 overflow-hidden transition-all duration-300 ease-in-out" id="content-material">
                <a href="{{$item->document}}" target="_bank" class="text-blue-500">เอกสาร</a>
                    <div class="mt-4">
                        @php
                        $course_video ="";
                        if($item->input_type == 'youtube' || $item->input_type == 'vimeo'){
                            $embed = \Embed::make($item->video_url)->parseUrl();
                            $course_video = $embed->getHtml();
                        } else if ($item->input_type == 'drive') {
                            $course_video = '<iframe src="' . $item->video_url . '" width="600px" height="300" allow="autoplay"></iframe>';
                        } else {
                            $course_video = "ไม่มีวิดีโอ";
                        }
                        @endphp
                        {!!$course_video !!}
                    </div>
                </div>
                <div class="flex gap-2 absolute top-0 right-0">
                    <div class="cursor-pointer" id="action-material">
                        <box-icon type='solid' name='chevrons-right' class="" id="right"></box-icon>
                        <box-icon name='chevrons-down' type='solid' class="hidden" id="bottom"></box-icon>
                    </div>
                    <img onclick="editMaterial({{$item->id}})" class="w-5 h-5" src="/image/icon/penedit.png" alt="">
                    <img onclick="delMaterial({{$item->id}})" class="w-5 h-5" src="/image/icon/delete.png" alt="">
                </div>
            </div>
            <p class="text-gray-400">07-feb-23, 08.02 Am</p>
            <hr>
            @endforeach
        </div>

        <div class="bg-white border-l-8 border-l-red-500 rounded-xl p-4 m-10">
            <div class="animate__animated animate__bounce flex justify-between ">
                <img class="h-8" src="/image/icon/assignment.png" alt="">
                <h1 class="text-xl">Asssignment</h1>
                <button onclick="addQuiz()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
            </div>
            <hr class="my-4 bg-gray-200 border-1">
            @if (count($quizzes) > 0)
                @foreach ($quizzes as $quiz)
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="my-4 text-green-500 cursor-pointer">Name : {{ $quiz->quiz_name }}</p>
                        </div>
                        <div>
                            <p class="my-4 text-green-500 cursor-pointer">Quiz type : {{ $quiz->quiz_type }}</p>
                        </div>
                        <div>
                            <p class="my-4 text-green-500 cursor-pointer">Total Question : 10</p>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ url('/backend/question-table/' . $quiz->id) }}" class="p-1 bg-blue-500 text-white rounded-lg">คำถาม</a>
                            <button onclick="editQuiz({{ $quiz->id }})" class="p-1 bg-yellow-400 text-white rounded-lg">แก้ไข</button>
                            <button onclick="delQuiz({{ $quiz->id }})" class="p-1 bg-red-500 text-white rounded-lg">ลบ</button>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @else
                <p class="my-4">no Asssignment</p>
                <p>null</p>
            @endif
        </div>

    </div>
</div>

@endsection

@section('be-scripts')
<script>
    let courseId = {!! json_encode($course->id) !!}

    let chkcate = document.querySelectorAll('#category');
    let actionCate = document.querySelector('#action-cate');
    let editCate = document.querySelectorAll('#edit-cate');
    let deleteButtons = document.querySelectorAll('#delete-cate');
    // console.log(chkcate)

    const action_material = document.querySelectorAll('#action-material');
    const content_material = document.querySelectorAll('#content-material');
    // let show = false; // เริ่มต้นเป็น false

    action_material.forEach((element, index) => {
        let show = false; // เริ่มต้นเป็น false
        let rightIcon = element.querySelector('#right');
        let bottomIcon = element.querySelector('#bottom');

        element.addEventListener('click', function () {
        if (show === false) {
            rightIcon.classList.add('hidden');
            bottomIcon.classList.remove('hidden');
            // content_material[index].classList.remove('hidden');
            content_material[index].classList.remove('h-0');
            content_material[index].classList.add('h-[370px]');
            show = true; // เปลี่ยนเป็น true เมื่อคลิกเพื่อแสดงเนื้อหา
        } else {
            rightIcon.classList.remove('hidden');
            bottomIcon.classList.add('hidden');
            // content_material[index].classList.add('hidden');
            content_material[index].classList.remove('h-[370px]');
            content_material[index].classList.add('h-0');

            show = false; // เปลี่ยนเป็น false เมื่อคลิกเพื่อซ่อนเนื้อหา
        }
        });
    });

    editCate.forEach(button => {
        button.addEventListener('click', () => {
            const cate_id = button.getAttribute('cate_id');
            funeditCate(cate_id);
        });
    });

    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            const cate_id = button.getAttribute('cate_id');
            deleteCate(cate_id);
        });
    });

    hiddenaction.onclick = () => {
        actionCate.classList.add('hidden')
    }

    chkcate.forEach(element => {
        element.addEventListener('change', () => {
            actionCate.classList.remove('hidden');

            selectedCategories = [];
            chkcate.forEach(checkbox => {
                if (checkbox.checked) {
                    const cateId = parseInt(checkbox.getAttribute('cate_id'), 10);
                    selectedCategories.push(cateId);
                }
            });

        });
    });

    function addcategory() {
        // console.log(courseId);
        param = {
            category : selectedCategories
        }
        console.log(selectedCategories);

        axios.post(`/api/backend/addcate/${courseId}`, param).then((response) => {
            console.log(response);
            if(response.data.status == 'success') {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1000
                })
                actionCate.classList.add('hidden')
            }
        })
    }

    function createCate() {
        Swal.fire({
            title: "add Category",
            html: ` <input type="text" id="cate" class="swal2-input" placeholder="Module Name">
                `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
            const cate = Swal.getPopup().querySelector("#cate").value;

                if (!cate) {
                    Swal.showValidationMessage(`Please enter your data.`);
                    return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                }

                param = {
                    category_name: cate
                }

                return param;
            },
        }).then((result) => {
            if (result.isConfirmed) {
            axios.post(`/api/backend/createcate`, result.value)
                .then((response) => {
                if(response.status = 'success') {
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
                    Swal.fire(
                    'something worng!',
                    error,
                    'warning'
                    )
                }
                })
                .catch((error) => {
                console.error('API Error:', error);
            });
            }
        });
    }

    function funeditCate(cate_id) {
        console.log("edit" + cate_id);
    }

    function deleteCate(cate_id) {
        console.log(cate_id)
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/api/backend/delcate/${cate_id}`).then((response) => {
                    console.log(response.status);
                    if (response.status = 200) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        ).then(() => {
                            location.reload()
                        })
                    } else {
                        Swal.fire(
                            'Error!',
                            'Delete failed some think wrong.',
                            'error'
                        )
                    }
                })
            }
        })
    }
    

    function addAnnouce() {
        Swal.fire({
            title: "Create announcement",
            html: ` <input type="textarea" id="content-annouce" name="addAnn" class="swal2-input" placeholder="Name" value="">`,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                let content = editor.getData();

                if (!content) {
                    Swal.showValidationMessage(`Please enter your data.`);
                    return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                }

                param = {
                    content: content,
                    courseId: courseId
                }

                return param;
            },
            customClass: {
                popup: 'custom-popup-annouce', // ปรับแต่งคลาส CSS ของ Popup
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const content = result.value;
                console.log(content);
                axios.post('/api/backend/createannouce', content)
                    .then((response) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1000
                        }).then(() => {
                            location.reload()
                        });
                    })
                    .catch((error) => {
                        console.error('API Error:', error);
                        // จัดการข้อผิดพลาด
                    });
            }
        });

        ClassicEditor
            .create(document.querySelector('#content-annouce'))
            .then(instance => {
                editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
                writer.setStyle('max-width', '100%', instance.editing.view.document.getRoot());
            })
            .catch(error => {
                console.error(error);
            });

    }

    function editAnnounce(Ann_id) {
        axios.get(`/api/backend/getann/${Ann_id}`).then((response) => {
            let returnAnn = response.data.data;

            Swal.fire({
                title: "Edit announcement",
                html: `
                    <textarea id="content-annouce" class="swal2-input" placeholder="Name">${returnAnn.content}</textarea>
                `,
                confirmButtonText: "Submit",
                focusConfirm: false,
                preConfirm: () => {
                    let content = editor.getData();

                    if (!content) {
                        Swal.showValidationMessage(`Please enter your data.`);
                        return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                    }

                    param = {
                        content: content
                    }

                    return param;
                },
                customClass: {
                    popup: 'custom-popup-annouce', // ปรับแต่งคลาส CSS ของ Popup
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    const content = result.value;
                    console.log(content);
                    axios.put(`/api/backend/editann/${Ann_id}`, content)
                        .then((response) => {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1000
                            }).then(() => {
                                location.reload()
                            });
                        })
                        .catch((error) => {
                            console.error('API Error:', error);
                            // จัดการข้อผิดพลาด
                        });
                }
            });
            ClassicEditor
                .create(document.querySelector('#content-annouce'))
                .then(instance => {
                    editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
                    writer.setStyle('max-width', '100%', instance.editing.view.document.getRoot());
                })
                .catch(error => {
                    console.error(error);
                });
        });
    }

    function deleteAnnounce(ann_id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/api/backend/delann/${ann_id}`).then((response) => {
                    console.log(response.status);
                    if (response.status = 200) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        ).then(() => {
                            location.reload()
                        })
                    } else {
                        Swal.fire(
                            'Error!',
                            'Delete failed some think wrong.',
                            'error'
                        )
                    }
                })
            }
        })
    }

    function addMaterial() {
        Swal.fire({
            title: "Create Quiz",
            html: `   <div class="flex items-center gap-4">
                        <label for="video">video url</label>
                        <input type="text" id="video" class="swal2-input">
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
                      <div class="flex items-center gap-4">
                        <label for="video">document</label>
                        <input type="file" id="filedoc" class="swal2-input">
                      </div>
                      <div class="flex items-center gap-4">
                        <label for="video">description</label>
                        <textarea id="description" class="swal2-input"></textarea>
                      </div>
                    `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                const video_url = Swal.getPopup().querySelector("#video").value;
                const thumbnail = Swal.getPopup().querySelector("#thumbnail");
                let thumbFile = thumbnail.files[0];
                const input_type = Swal.getPopup().querySelector("#input-type").value;
                const document = Swal.getPopup().querySelector("#filedoc");
                let docFile = document.files[0];
                const description = Swal.getPopup().querySelector("#description").value;

                //   if (!video || !document) {
                //       Swal.showValidationMessage(`Please enter your data.`);
                //       return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                //   }

                formData = new FormData();
                formData.append('elerningcourse_id', courseId),
                formData.append('video_url', video_url),
                formData.append('thumbnail', thumbFile),
                formData.append('input_type', input_type),
                formData.append('document', docFile)
                formData.append('description', description)
                return formData;
            },
            customClass: {
                popup: 'custom-popup-material', // ปรับแต่งคลาส CSS ของ Popup
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const param = result.value;
                param.forEach((value, key) => {
                    console.log(key + ': ' + value);
                });
                axios.post('/api/backend/creatematerial', param)
                    .then((response) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1000
                        }).then(() => {
                            location.reload()
                        });
                    })
                    .catch((error) => {
                        console.error('API Error:', error);
                        // จัดการข้อผิดพลาด
                    });
            }
        });
    }

    function editMaterial(mat_id) {
        axios.get(`/api/backend/material/${mat_id}`).then((response) => {
            console.log(response.data.data);
            let material = response.data.data;
            Swal.fire({
                title: "Create Quiz",
                html: `   <div class="flex items-center gap-4">
                            <label for="video">video url</label>
                            <input type="text" id="video" class="swal2-input w-3/4" value="${material.video_url}">
                        </div>
                        <div class="flex items-center gap-4 ">
                            <label for="video">thumbnail</label>
                            <input type="file" id="thumbnail" class="swal2-input">
                        </div>
                        <div class="flex mt-4 items-center gap-4 >
                            <label for="video">input type</label>
                            <select id="input-type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="youtube" ${material.input_type === 'youtube' ? 'selected' : ''}>Youtube</option>
                                <option value="drive" ${material.input_type === 'drive' ? 'selected' : ''}>GoogleDrive</option>
                                <option value="vimeo" ${material.input_type === 'vimeo' ? 'selected' : ''}>Vimeo</option>
                            </select>
                        </div>
                        <div class="flex items-center gap-4">
                            <label for="video">document</label>
                            <input type="file" id="filedoc" class="swal2-input">
                        </div>
                        <div class="flex mt-4 gap-4">
                            <label for="video">description</label>
                            <textarea id="description" class="block w-3/4 rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">${material.description}</textarea>
                        </div>
                        `,
                confirmButtonText: "Submit",
                focusConfirm: false,
                preConfirm: () => {
                    const video_url = Swal.getPopup().querySelector("#video").value;
                    const thumbnail = Swal.getPopup().querySelector("#thumbnail");
                    let thumbFile = thumbnail.files[0];
                    const input_type = Swal.getPopup().querySelector("#input-type").value;
                    const document = Swal.getPopup().querySelector("#filedoc");
                    let docFile = document.files[0];
                    const description = Swal.getPopup().querySelector("#description").value;

                    //   if (!video_url || !document) {
                    //       Swal.showValidationMessage(`Please enter your data.`);
                    //       return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                    //   }

                    formData = new FormData();
                    formData.append('elerningcourse_id', courseId),
                    formData.append('video_url', video_url),
                    formData.append('thumbnail', thumbFile),
                    formData.append('input_type', input_type),
                    formData.append('document', docFile)
                    formData.append('description', description)
                    return formData;
                },
                customClass: {
                    popup: 'custom-popup-material', // ปรับแต่งคลาส CSS ของ Popup
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    const param = result.value;
                    param.forEach((value, key) => {
                        console.log(key + ': ' + value);
                    });
                    axios.post(`/api/backend/editmaterial/${mat_id}`, param)
                        .then((response) => {
                            console.log(response);
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1000
                            }).then(() => {
                                // location.reload()
                            });
                        })
                        .catch((error) => {
                            console.error('API Error:', error);
                            // จัดการข้อผิดพลาด
                        });
                }
            });
        })
    }

    function delMaterial(mat_id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/api/backend/delmaterial/${mat_id}`).then((response) => {
                    console.log(response.status);
                    if (response.status = 200) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        ).then(() => {
                            location.reload()
                        })
                    } else {
                        Swal.fire(
                            'Error!',
                            'Delete failed some think wrong.',
                            'error'
                        )
                    }
                })
            }
        })
    }

    function addQuiz() {
        Swal.fire({
            title: "Create Quiz",
            html: ` <div class="flex flex-col justify-center items-center gap-4">
                        <input type="text" id="quiz_name" class="swal2-input" placeholder="Quiz Name" value="">
                        <input type="number" id="quiz_timer" class="swal2-input" placeholder="Timer" value="">
                        <select id="quiz_type" style="font-size:20px;" name="quiz_type" class="block w-full h-14 px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option class="text-lg" value="pretest">Pre-test</option>
                            <option class="text-lg" value="posttest">Post-Test</option>
                        </select>
                    </div>
            `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                const quiz_name = Swal.getPopup().querySelector("#quiz_name").value;
                const quiz_timer = Swal.getPopup().querySelector("#quiz_timer").value;
                const quiz_type = Swal.getPopup().querySelector("#quiz_type").value;

                if (!quiz_name|| !quiz_timer|| !quiz_type) {
                    Swal.showValidationMessage(`Please enter your data.`);
                    return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                }

                param = {
                    quiz_name: quiz_name,
                    quiz_timer: quiz_timer,
                    quiz_type: quiz_type,
                    courseId: courseId
                }

                return param;
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const param = result.value;
                console.log(param);
                axios.post('/api/backend/createquiz', param)
                    .then((response) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1000
                        }).then(() => {
                            location.reload()
                        });
                    })
                    .catch((error) => {
                        console.error('API Error:', error);
                        // จัดการข้อผิดพลาด
                    });
            }
        });
    }

    function editQuiz(quiz_id) {
        axios.get(`/api/backend/quiz/${quiz_id}`).then((response) => {
            let data = response.data.data;
            console.log(data);
            Swal.fire({
                title: "Create Quiz",
                html: `
                    <div class="flex flex-col justify-center items-center gap-4">
                        <input type="text" id="quiz_name" class="swal2-input" placeholder="Quiz Name" value="${data.quiz_name}">
                        <input type="number" id="quiz_timer" class="swal2-input" placeholder="Timer" value="${data.timer}">
                        <select id="quiz_type" style="font-size:20px;" name="quiz_type" class="block w-full h-14 px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option class="text-lg" value="pretest" ${data.quiz_type === 'pretest' ? 'selected' : ''}>Pre-test</option>
                            <option class="text-lg" value="posttest" ${data.quiz_type === 'posttest' ? 'selected' : ''}>Post-Test</option>
                        </select>
                    </div>
                `,
                confirmButtonText: "Submit",
                focusConfirm: false,
                preConfirm: () => {
                    const quiz_name = Swal.getPopup().querySelector("#quiz_name").value;
                    const quiz_timer = Swal.getPopup().querySelector("#quiz_timer").value;
                    const quiz_type = Swal.getPopup().querySelector("#quiz_type").value;

                    if (!quiz_name || !quiz_type) {
                        Swal.showValidationMessage(`Please enter your data.`);
                        return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                    }

                    param = {
                        quiz_name: quiz_name,
                        quiz_timer: quiz_timer,
                        quiz_type: quiz_type
                    }

                    return param;
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    const param = result.value;
                    console.log(param);
                    axios.put(`/api/backend/editquiz/${quiz_id}`, param)
                        .then((response) => {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1000
                            }).then(() => {
                                location.reload()
                            });
                        })
                        .catch((error) => {
                            console.error('API Error:', error);
                            // จัดการข้อผิดพลาด
                        });
                }
            });
        })
    }

    function delQuiz(quiz_id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/api/backend/delquiz/${quiz_id}`).then((response) => {
                    console.log(response.status);
                    if (response.status = 200) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        ).then(() => {
                            location.reload()
                        })
                    } else {
                        Swal.fire(
                            'Error!',
                            'Delete failed some think wrong.',
                            'error'
                        )
                    }
                })
            }
        })
    }
</script>
@endsection
