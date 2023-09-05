@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="pt-20 px-1 h-screen gap-4 flex ">
        <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
            @include('pages.app_dashboard.components.sidebar')
        </div>
        <!-- box-profile -->
        <div class="w-full h-full overflow-hidden overflow-y-scroll bg-gray-100 rounded-lg p-4 flex flex-col gap-4">
            <div class="flex flex-col justify-center gap-4">
                <h1 class="text-xl text-center font-bold">Profile</h1>

                <div class="flex justify-center">
                    @if (isset($user->img_profile))
                        <img class="w-80 h-96 bg-gray-300 rounded-lg" src="{{ $user->img_profile }}" id="Opt"
                            alt="">
                    @else
                        <img class="w-80 h-96 bg-gray-300 rounded-lg" src="image/icon/user.png" id="Opt"
                            alt="">
                    @endif
                </div>

                <div class="w-full flex justify-center gap-4">
                    <p>name</p>
                    <p>{{ $user->name }}</p>
                </div>
                <button onclick="editUser()" class="bg-orange-500 p-1 px-2 mx-auto rounded-lg text-white">แก้ไข</button>
            </div>
            <!-- box-mycourse -->
            <div>
                <h1 class="text-xl font-bold text-center">my course</h1>
                <div class="flex gap-2 ">
                    @if (count($elerningcourses) > 0)
                        @foreach ($elerningcourses as $elerningcourse)
                            <a href="/course/{{ $elerningcourse->id }}">
                                <div class="mx-4 flex flex-col bg-red-400">
                                    <h1>{{ $elerningcourse->course_name }}</h1>
                                    <h1>{{ $elerningcourse->user_name }}</h1>
                                    <p>{{ $elerningcourse->description }}</p>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>nodata</p>
                    @endif
                </div>

            </div>
            <!-- endbox-mycourse -->
        </div>
        <!-- endbox -->

    </div>
@endsection

@section('scripts')
<script>
    let user = {!! json_encode($user) !!};

    function editUser() {
        Swal.fire({
            title: "Edit",
            html: ` <input type="text" id="name" class="swal2-input" placeholder="Name" value="${user.name}">
                    <input type="email" id="email" class="swal2-input" placeholder="Email" value="${user.email}">
                    <input type="text" id="password" class="swal2-input" placeholder="New Password" >
                    <input type="file" id="profile" class="swal2">
                    `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                let name = Swal.getPopup().querySelector("#name").value;
                let email = Swal.getPopup().querySelector("#email").value;
                let password = Swal.getPopup().querySelector("#password").value;

                if (!name || !email) {
                    Swal.showValidationMessage(`Please enter your data.`);
                    return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                }

                let profileInput = Swal.getPopup().querySelector("#profile");
                let profileFile = profileInput.files[0];

                let formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('password', password);
                formData.append('profile', profileFile);

                return formData;
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const formData = result.value;

                formData.forEach((value, key) => {
                    console.log(key + ': ' + value);
                });

                axios.put(`/api/dashboard/edituser/${user.id}`, formData)
                .then((response) => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1000
                }).then( () => {
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
</script>
@endsection
