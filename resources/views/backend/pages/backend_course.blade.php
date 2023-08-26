@extends('backend.layouts.main')
@section('title') Course @endsection
@section('container')

<div class="">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Course</h1>
        <button type="button" id="create-course" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
    </div>
    
    <div class="relative h-screen h-[700px] my-10 overflow-y-scroll mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-tl-lg">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        img
                    </th>
                    <th scope="col" class="px-6 py-3">
                        updated_at
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-tr-lg">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr class="bg-white dark:bg-gray-800 border-b-2">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                        {{$course->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$course->course_name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$course->price}}
                    </td>
                    <td class="px-6 py-4">
                        {{$course->description}}
                    </td>
                    <td class="px-6 py-4">
                        @if(!empty($course->img_course))
                        <img class="w-20 h-20" src="{{$course->img_course}}" alt="">
                        @else
                        <img class="w-20 h-20" src="/image/icon/isologo.png" alt="">
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        {{$course->updated_at}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/backend/coursedetail/{{$course->id}}">ลายละเอียด</a>
                        <button data-id="{{$course->id}}" id="editCourse">แก้ไข</button>
                        <button>ลบ</button>
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
    btncreate.addEventListener('click', () => {
        create()
    })
    editCourse.forEach(editCourse => {
        editCourse.addEventListener('click', () => {
            let courseId = editCourse.getAttribute('data-id');
            edit(courseId);
        });
    });

    async function create() {
    try {
        const result = await Swal.fire({
        title: "Edit",
        html: ` <input type="text" id="course_name" class="swal2-input" placeholder="Name" value="">
                <input type="text" id="user_name" class="swal2-input" placeholder="teacher" value="">
                <input type="number" id="price" class="swal2-input" placeholder="price" value="">
                <input type="text" id="description" class="swal2-input" placeholder="description" >
                <input type="text" id="img_course" class="swal2-input" placeholder="img_course" >
              `,
        confirmButtonText: "Submit",
        focusConfirm: false,
        preConfirm: () => {
                const course_name = Swal.getPopup().querySelector("#course_name").value;
                const user_name = Swal.getPopup().querySelector("#user_name").value;
                const price = Swal.getPopup().querySelector("#price").value;
                const description = Swal.getPopup().querySelector("#description").value;
                const img_course = Swal.getPopup().querySelector("#img_course").value;

                if (!course_name || !user_name || !price || !description || !img_course) {
                    Swal.showValidationMessage(`Please enter your data.`);
                }

                param = {
                    course_name: course_name,
                    user_name: user_name,
                  price: price,
                  description: description,
                  img_course: img_course
                }

                console.log(param);
                return param;
            },
    });
    if (result.isConfirmed) {
            const response = await axios.post(`/api/backend/course`, result.value);
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
            console.log(data);
            const result = await Swal.fire({
            title: "Edit",
            html: ` <input type="text" id="course_name" class="swal2-input" placeholder="Name" value="${data.course_name}">
                    <input type="text" id="user_name" class="swal2-input" placeholder="teacher" value="${data.user_name}">
                    <input type="number" id="price" class="swal2-input" placeholder="price" value="${data.price}">
                    <input type="text" id="description" class="swal2-input" placeholder="description" value="${data.description}">
                    <input type="text" id="img_course" class="swal2-input" placeholder="img_course" value="${data.img_course}">
                `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                    const course_name = Swal.getPopup().querySelector("#course_name").value;
                    const user_name = Swal.getPopup().querySelector("#user_name").value;
                    const price = Swal.getPopup().querySelector("#price").value;
                    const description = Swal.getPopup().querySelector("#description").value;
                    const img_course = Swal.getPopup().querySelector("#img_course").value;

                    if (!course_name || !user_name || !price || !description || !img_course) {
                        Swal.showValidationMessage(`Please enter your data.`);
                    }

                    param = {
                        course_name: course_name,
                        user_name: user_name,
                    price: price,
                    description: description,
                    img_course: img_course
                    }

                    console.log(param);
                    return param;
                },
        });
        if (result.isConfirmed) {
                // const response = await axios.post(`/api/backend/course`, result.value);
                // console.log("Response:", response);
                // location.reload();
            }
        } catch (error) {
            console.error(error);
    }
    }

</script>

@endsection