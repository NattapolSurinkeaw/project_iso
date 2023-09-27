@extends('backend.layouts.main')
@section('title') Course @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-medium">Elearning Course</h1>
        <div>
            <button type="button" id="create-category" class="text-white bg-blue-700 hover:bg-blue-800 font-normal rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Category</button>
            <button type="button" id="create-course" class="text-white bg-green-500 hover:bg-green-600 font-normal rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Course</button>
        </div>
    </div>
    
    <div class="relative h-4/5 overflow-y-scroll mx-10">
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
                @foreach($courses as $course)
                <tr class="bg-white dark:bg-gray-800 border-b-2">
                    <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                        {{$course->id}}
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
                    <td class="px-6 py-4">
                        @if(!empty($course->img_course) && $course->img_course !== 'null')
                        <img class="w-20 h-20" src="{{$course->img_course}}" alt="">
                        @else
                        <img class="w-20 h-20" src="/image/icon/isologo.png" alt="">
                        @endif
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{$course->updated_at}}
                    </td>
                    <td class="px-6 py-4">
                        <a class="bg-green-600 p-2 rounded-lg text-white w-24 text-center" href="/backend/coursedetail/{{$course->id}}">สมาชิก</a>
                        <a class="bg-blue-600 p-2 rounded-lg text-white w-24 text-center" href="/backend/coursedetail/{{$course->id}}">รายละเอียด</a>
                        <button class="bg-yellow-500 p-2 rounded-lg text-white text-center" data-id="{{$course->id}}" id="editCourse">แก้ไข</button>
                        <button class="bg-red-600 p-2 rounded-lg text-white text-center" data-id="{{$course->id}}" id="delCourse">ลบ</button>
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


    async function create() {
    try {
        const result = await Swal.fire({
        title: "Add Course",
        html: ` <input type="text" id="course_name" class="swal2-input" placeholder="Name" value="">
                <input type="text" id="user_name" class="swal2-input" placeholder="teacher" value="">
                <input type="number" id="price" class="swal2-input" placeholder="price" value="">
                <input type="text" id="description" class="swal2-input" placeholder="description" >
                <input type="file" id="img_course" class="swal2 mt-4">
              `,
        confirmButtonText: "Submit",
        focusConfirm: false,
        preConfirm: () => {
                const course_name = Swal.getPopup().querySelector("#course_name").value;
                const user_name = Swal.getPopup().querySelector("#user_name").value;
                const price = Swal.getPopup().querySelector("#price").value;
                const description = Swal.getPopup().querySelector("#description").value;
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
                formData.append('imgCourse' , imgCourse)

                return formData;
            },
    });
    if (result.isConfirmed) {
            let formData = result.value;
            const response = await axios.post(`/api/backend/course`, formData);
            console.log("Response:", response);
            location.reload();
        }
    } catch (error) {
        console.error(error);
  }
}


    async function edit(courseId) {
        try {
            const response = await axios.get(`/api/course/${courseId}`);
            let data = response.data.data
            const result = await Swal.fire({
            title: "Edit Course",
            html: ` <input type="text" id="course_name" class="swal2-input" placeholder="Name" value="${data.course_name}">
                    <input type="text" id="user_name" class="swal2-input" placeholder="teacher" value="${data.user_name}">
                    <input type="number" id="price" class="swal2-input" placeholder="price" value="${data.price}">
                    <input type="text" id="description" class="swal2-input" placeholder="description" value="${data.description}">
                    <input type="file" id="img_course" class="swal2 mt-4">
                `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                    const course_name = Swal.getPopup().querySelector("#course_name").value;
                    const user_name = Swal.getPopup().querySelector("#user_name").value;
                    const price = Swal.getPopup().querySelector("#price").value;
                    const description = Swal.getPopup().querySelector("#description").value;
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
                    formData.append('imgCourse' , imgCourse)

                    return formData;
                },
        });
        if (result.isConfirmed) {
                console.log(data.id);
                // formData.forEach((value, key) => {
                //     console.log(key + ': ' + value);
                // });
                // return;
                const response = await axios.post(`/api/backend/editcourse/${data.id}`, result.value);
                console.log("Response:", response);
                location.reload();
            }
        } catch (error) {
            console.error(error);
    }
    }

    function delCourse(courseId) {
        console.log(courseId);
        // ทำสิ่งที่คุณต้องการกับ courseId ที่ได้รับ
    }

</script>

@endsection