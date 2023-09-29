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
                <button onclick="addAnnouce()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
            </div>
            <hr class="h-px mt-4 bg-gray-200 border-0 dark:bg-gray-700">
            @if (count($cates) > 0)
            <div class="grid grid-cols-3 gap-3 p-4">
                @foreach ($cates as $cate)
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="category" cate_id = "{{$cate->id}}" id="category">
                    <label for="category">{{$cate->category_name}}</label>
                </div>
                @endforeach
            </div>
            @else
                <p class="my-4">no announcement</p>
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
            <div class="animate__animated animate__bounce flex justify-between ">
                <img class="h-8" src="/image/icon/material-icon.png" alt="">
                <h1 class="text-xl">Course Material</h1>
                <button onclick="addMaterial()" id="addMaterial"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
            </div>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

            <p class="my-5">ไฟล์สำหรับทำความเข้าใจควบคู่กับการเกี่ยวกับมาตรฐาน iso</p>
            <p class="my-4 text-blue-400 cursor-pointer">ไฟล์ iso.pdf</p>
            <p>07-feb-23, 08.02 Am</p>
            <hr>
            <p class="my-5">ไฟล์สำหรับทำความเข้าใจควบคู่กับการเกี่ยวกับมาตรฐาน iso</p>
            <p class="my-4 text-blue-400 cursor-pointer">
                <video class="w-96" controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </p>
            <p>07-feb-23, 08.02 Am</p>
            <hr>
        </div>

        <div class="bg-white border-l-8 border-l-red-500 rounded-xl p-4 m-10">
            <div class="animate__animated animate__bounce flex justify-between ">
                <img class="h-8" src="/image/icon/assignment.png" alt="">
                <h1 class="text-xl">Asssignment</h1>
                <button onclick="addQuiz()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
            </div>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
            @if (count($quizzes) > 0)
                @foreach ($quizzes as $quiz)
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="my-4 text-green-500 cursor-pointer">{{ $quiz->quiz_name }}</p>
                            <p>{{ $quiz->update_at }}</p>
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
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
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
                html: `   <label for="video">video</label>
                    <input type="file" id="video" class="swal2-input">
                    <label for="video">document</label>
                    <input type="file" id="filedoc" class="swal2-input">
        `,
                confirmButtonText: "Submit",
                focusConfirm: false,
                preConfirm: () => {
                    const video = Swal.getPopup().querySelector("#video");
                    let videoFile = video.files[0];
                    const document = Swal.getPopup().querySelector("#filedoc");
                    let docFile = document.files[0];

                    //   if (!video || !document) {
                    //       Swal.showValidationMessage(`Please enter your data.`);
                    //       return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                    //   }

                    formData = new FormData();
                    formData.append('video', videoFile),
                        formData.append('document', docFile)

                    return formData;
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

        function addQuiz() {
            Swal.fire({
                title: "Create Quiz",
                html: ` <div class="flex flex-col justify-center items-center gap-4">
                    <input id="quiz_name" class="swal2-input" placeholder="Quiz Name" value="">
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
                    const quiz_type = Swal.getPopup().querySelector("#quiz_type").value;

                    if (!quiz_name || !quiz_type) {
                        Swal.showValidationMessage(`Please enter your data.`);
                        return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                    }

                    param = {
                        quiz_name: quiz_name,
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
                // console.log(data);
                Swal.fire({
                    title: "Create Quiz",
                    html: `
                        <div class="flex flex-col justify-center items-center gap-4">
                            <input id="quiz_name" class="swal2-input" placeholder="Quiz Name" value="${data.quiz_name}">
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
                        const quiz_type = Swal.getPopup().querySelector("#quiz_type").value;

                        if (!quiz_name || !quiz_type) {
                            Swal.showValidationMessage(`Please enter your data.`);
                            return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                        }

                        param = {
                            quiz_name: quiz_name,
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
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
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
