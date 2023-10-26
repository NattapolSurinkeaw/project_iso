@extends('backend.layouts.main')
@section('title') Manage Elearning @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-medium">Elearning Course</h1>
        <div>
            <button type="button" id="create-course" class="text-white bg-green-500 hover:bg-green-600 font-normal rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Course</button>
        </div>
    </div>
    
    <div class="relative h-4/5 overflow-y-scroll max-xl:w-[85%] mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center rounded-tl-lg">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        img
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        updated_at
                    </th>
                    <th scope="col" class="px-6 py-3 text-center rounded-tr-lg">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($courses as $course)
                <tr class="bg-white dark:bg-gray-800 border-b-2">
                    <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                        {{$i++}}
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{$course->course_name}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{$course->price}}
                    </td>
                    <td class="w-96 px-6 py-4 text-center">
                        {{ Str::limit($course->description, 100) }}
                    </td>
                    <td class="">
                        @if (!empty($course->img_course) && $course->img_course !== 'null')
                        <img class="w-40 h-20" src="{{$course->img_course}}" alt="">
                        @else
                        <img class="w-40 h-20" src="/image/icon/isologo.png" alt="">
                        @endif
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{$course->updated_at}}
                    </td>
                    <td class="max-2xl:w-60 px-6 py-4 flex justify-center gap-2">
                        <a class="bg-gray-300 hover:bg-gray-500 p-2 rounded-lg text-white text-center" title="member" href="/backend/coruse-member/{{$course->id}}"><img src="/image/icon/membercourse.png" class="w-8 h-8" alt="สมาชิก"></a>
                        <a class="bg-gray-300 hover:bg-gray-500 p-2 rounded-lg text-white text-center" title="detail" href="/backend/coursedetail/{{$course->id}}"><img src="/image/icon/detail.jpg" class="w-8 h-8" alt="รายละเอียด"></a>
                        <button class="bg-gray-300 hover:bg-gray-500 p-2 rounded-lg text-white text-center" title="edit" data-id="{{$course->id}}" id="editCourse"><img src="/image/icon/edit.png" class="w-8 h-8" alt="แก้ไข"></button>
                        <button class="bg-gray-300 hover:bg-gray-500 p-2 rounded-lg text-white text-center" title="delete" data-id="{{$course->id}}" id="delCourse"><img data-id="{{$course->id}}" src="/image/icon/delete.png" class="w-8 h-8" alt="ลบ"></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('be-scripts')
<script>
    let btncreate = document.querySelector('#create-course');
    let editCourse = document.querySelectorAll('#editCourse');
    let delCourseButtons = document.querySelectorAll('#delCourse');
    
    btncreate.addEventListener('click', () => {
        create()
    })
    editCourse.forEach(editCourse => {
        editCourse.addEventListener('click', () => {
            let courseId = editCourse.getAttribute('data-id');
            edit(courseId);
        });
    });

    delCourseButtons.forEach(delCourseButton => {
        delCourseButton.addEventListener('click', (event) => {
            let courseId = event.target.getAttribute('data-id');
            delCourse(courseId);
        });
    });


    function create() {
        Swal.fire({
        title: "Add Course",
        html: ` <img src="/image/icon/upload.png" alt="" class="w-32 h-40 mx-auto" id="ImgOpt">
                <input type="text" id="course_name" class="swal2-input" placeholder="Name" value="">
                <input type="text" id="user_name" class="swal2-input" placeholder="teacher" value="">
                <input type="number" id="price" class="swal2-input" placeholder="price" value="">
                <input type="text" id="description" class="swal2-input mb-4" placeholder="description" >
                <textarea id="details"></textarea>
                <label for="img_course" class="block w-full mx-auto mt-3 bg-blue-500 text-white flex items-center justify-center gap-1 w-44 p-3 rounded-xl">
                    <span>
                        <svg viewBox="0 0 640 512" fill="white" height="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"></path>
                        </svg>    
                    </span>
                    <span>upload image</span>
                </label>
                <input type="file" id="img_course" name="img_course" class="hidden"> 
              `,
        confirmButtonText: "Submit",
        focusConfirm: false,
        preConfirm: () => {
                const course_name = Swal.getPopup().querySelector("#course_name").value;
                const user_name = Swal.getPopup().querySelector("#user_name").value;
                const price = Swal.getPopup().querySelector("#price").value;
                const description = Swal.getPopup().querySelector("#description").value;
                let details = editor.getData();
                const img_course = Swal.getPopup().querySelector("#img_course");
                const imgCourse = img_course.files[0];
                if (!course_name || !user_name || !price || !description || !imgCourse) {
                    Swal.showValidationMessage(`Please enter your data.`);
                }

                formData = new FormData();
                formData.append('course_name' , course_name)
                formData.append('user_name' , user_name)
                formData.append('price' , price)
                formData.append('description' , description)
                formData.append('details' , details)
                formData.append('imgCourse' , imgCourse)

                return formData;
            },
        }).then((result) => {
            if (result.isConfirmed) {
                let formData = result.value;
                axios.post(`/api/backend/course`, formData).then((response) => {
                    console.log("Response:", response);
                    if(response.data.status == "success") {

                        location.reload();
                    }

                })
            }

        })

        img_course.onchange = evt => {
            const [file] = img_course.files
            if (file) {
                ImgOpt.src = URL.createObjectURL(file)
            }
        }

        ClassicEditor
            .create(document.querySelector('#details'))
            .then(instance => {
                editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
                writer.setStyle('max-width', '100%', instance.editing.view.document.getRoot());
            })
            .catch(error => {
                console.log(error);
            });
    } 
        


    function edit(courseId) {
        axios.get(`/api/course/${courseId}`).then((response) => {
            let data = response.data.data
            Swal.fire({
            title: "Edit Course",
            html: ` <img src="/image/icon/upload.png" alt="" class="w-32 h-40 mx-auto" id="ImgOpt">
                    <input type="text" id="course_name" class="swal2-input" placeholder="Name" value="${data.course_name}">
                    <input type="text" id="user_name" class="swal2-input" placeholder="teacher" value="${data.user_name}">
                    <input type="number" id="price" class="swal2-input" placeholder="price" value="${data.price}">
                    <input type="text" id="description" class="swal2-input mb-4" placeholder="description" value="${data.description}">
                    <textarea id="details">${data.details}</textarea>
                    <label for="img_course" class="block w-full mx-auto mt-3 bg-blue-500 text-white flex items-center justify-center gap-1 w-44 p-3 rounded-xl">
                        <span>
                            <svg viewBox="0 0 640 512" fill="white" height="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"></path>
                            </svg>    
                        </span>
                        <span>upload image</span>
                    </label>
                    <input type="file" id="img_course" name="img_course" class="hidden"> 
                `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                    const course_name = Swal.getPopup().querySelector("#course_name").value;
                    const user_name = Swal.getPopup().querySelector("#user_name").value;
                    const price = Swal.getPopup().querySelector("#price").value;
                    const description = Swal.getPopup().querySelector("#description").value;
                    let details = editor.getData();
                    const img_course = Swal.getPopup().querySelector("#img_course");
                    const imgCourse = img_course.files[0];

                    if (!course_name || !user_name || !price || !description) {
                        Swal.showValidationMessage(`Please enter your data.`);
                    }

                    formData = new FormData();
                    formData.append('course_name' , course_name)
                    formData.append('user_name' , user_name)
                    formData.append('price' , price)
                    formData.append('description' , description)
                    formData.append('details' , details)
                    formData.append('imgCourse' , imgCourse)

                    return formData;
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log(data.id);
                    // formData.forEach((value, key) => {
                    //     console.log(key + ': ' + value);
                    // });
                    // return;
                    axios.post(`/api/backend/editcourse/${data.id}`, result.value).then((response) => {
                        console.log("Response:", response);
                        if(response.data.status == 'success') {
                            location.reload();

                        }
                    })
                }
            })

            img_course.onchange = evt => {
                const [file] = img_course.files
                if (file) {
                    ImgOpt.src = URL.createObjectURL(file)
                }
            }

            ClassicEditor
                .create(document.querySelector('#details'))
                .then(instance => {
                    editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
                    writer.setStyle('max-width', '100%', instance.editing.view.document.getRoot());
                })
                .catch(error => {
                    console.log(error);
                });
        })
            
    }

    function delCourse(courseId) {
        console.log(courseId);
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
                axios.delete(`/api/backend/delcourse/${courseId}`).then((response) => {
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