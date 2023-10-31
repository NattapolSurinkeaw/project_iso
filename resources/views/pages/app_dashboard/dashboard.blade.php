@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="py-4 px-1 gap-4 flex max-xs:flex-col">
        
        @include('pages.app_dashboard.components.sidebar')
        <!-- box-profile -->
        <div class="w-full h-full bg-gray-100 rounded-lg p-4 flex flex-col gap-4">
            <div class="flex flex-col justify-center gap-4">
                <h1 class="text-2xl font-medium text-center">Profile</h1>

                <div class="flex justify-center">
                    @if (isset($user->img_profile))
                        <img class="w-80 h-96 bg-gray-300 rounded-lg" src="{{ $user->img_profile }}" id="Opt"
                            alt="">
                    @else
                        <img class="w-80 h-96 bg-gray-300 rounded-lg" src="image/icon/user.png" id="Opt"
                            alt="">
                    @endif
                </div>

                <div class="w-full flex flex-col items-center justify-center gap-4">
                    <div class="flex gap-2">
                        <p class="font-bold">Email : </p>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="flex gap-2">
                        <p class="font-bold">name : </p>
                        <p>{{ $user->name }}</p>
                    </div>
                </div>
                <button onclick="editUser()" class="bg-orange-500 p-1 px-2 mx-auto rounded-lg text-white">แก้ไข</button>
            </div>
            <!-- box-mycourse -->
            <div class="p-4 bg-white rounded-lg">
                <h1 class="text-xl font-bold text-center">my course</h1>
                <div class="flex flex-wrap gap-2 mt-5 max-xs:justify-center">
                    @if(count($elerningcourses) > 0)
                    @foreach ($elerningcourses as $elerningcourse)
                    <a href="{{url('/course/'.$elerningcourse->id)}}">
                        <div class=" border-2 rounded-xl p-5 flex flex-col justify-center items-center gap-2 shadow-lg">
                            <div class="overflow-hidden rounded-lg h-42 w-64">
                                @if(!empty($elerningcourse->img_course))
                                    <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="{{$elerningcourse->img_course}}" alt="">
                                @else
                                    <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="/image/icon/isologo.png" alt="">
                                @endif
                            </div> 
                            <div class="w-full flex flex-col items-start gap-2">
                                <div class="flex justify-between items-center">
                                    <h1 class="text-2xl font-bold w-full truncate">{{$elerningcourse->course_name}}</h1>
                                </div>
    
                                <div class="flex justify-between items-center">
                                    <div class="flex justify-between">
                                        <h1 class="text-lg text-gray-400">{{$elerningcourse->user_name}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    @foreach ($elerningcourses as $elerningcourse)
                    <a href="{{url('/course/'.$elerningcourse->id)}}">
                        <div class=" border-2 rounded-xl p-5 flex flex-col justify-center items-center gap-2 shadow-lg">
                            <div class="overflow-hidden rounded-lg h-42 w-64">
                                @if(!empty($elerningcourse->img_course))
                                    <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="{{$elerningcourse->img_course}}" alt="">
                                @else
                                    <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="/image/icon/isologo.png" alt="">
                                @endif
                            </div> 
                            <div class="w-full flex flex-col items-start gap-2">
                                <div class="flex justify-between items-center">
                                    <h1 class="text-2xl font-bold w-full truncate">{{$elerningcourse->course_name}}</h1>
                                </div>
    
                                <div class="flex justify-between items-center">
                                    <div class="flex justify-between">
                                        <h1 class="text-lg text-gray-400">{{$elerningcourse->user_name}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    @else
                    <div class="mx-auto">
                        <img class="w-32 " src="/image/icon/bookempty.png" alt="">
                        <p class="text-gray-500">Course empty...</p>
                        <a class="text-blue-500" href="{{url('/elerning')}}">View the course</a>
                    </div>
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
            title: "Profile",
            html: `
                    <img class="w-60 h-72 mx-auto mb-4" src="/image/icon/upload.png" id="ImgOpt" >
                    <label for="profile" class="block bg-green-600 text-white px-4 py-1 w-28 mx-auto rounded-lg cursor-pointer">อัปโหลด</label>
                    <input type="file" name="profile" id="profile" class="swal2 hidden">
                    <input type="email" id="email" class="swal2-input w-4/5" placeholder="Email" value="${user.email}" disabled>
                    <input type="text" id="name" class="swal2-input" placeholder="Name" value="${user.name}">

                    <input type="text" id="old-password" class="swal2-input mt-10" placeholder="Old Password" >
                    <input type="text" id="password" class="swal2-input" placeholder="New Password" >
                    `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                let name = Swal.getPopup().querySelector("#name").value;
                let oldPassword = Swal.getPopup().querySelector("#old-password").value;
                let password = Swal.getPopup().querySelector("#password").value;

                if (!name) {
                    Swal.showValidationMessage(`Please enter your data.`);
                    return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                }

                let profileInput = Swal.getPopup().querySelector("#profile");
                let profileFile = profileInput.files[0];

                let formData = new FormData();
                formData.append('name', name);
                formData.append('old-password', oldPassword);
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

                axios.post(`/api/dashboard/edituser/${user.id}`, formData)
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
        profile.onchange = evt => {
            const [file] = profile.files
            if (file) {
                ImgOpt.src = URL.createObjectURL(file)
            }
        }
    }
</script>
@endsection
