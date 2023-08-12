@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
    @include('pages.app_dashboard.components.sidebar')
  </div>
  <!-- box-profile -->
  <div class="w-full bg-gray-100 rounded-lg p-4 flex flex-col gap-4 items-center">
    <div class="flex flex-col justify-center items-center gap-4">
      <h1 class="text-xl font-bold">Profile</h1>

      @if (isset($user->img_profile))
      <img class="w-80 h-96 bg-gray-300 rounded-lg" src="{{$user->img_profile}}" id="Opt" alt="">
      @else
      <img class="w-80 h-96 bg-gray-300 rounded-lg" src="image/icon/user.png" id="Opt" alt="">
      @endif

      <div class="flex gap-4">
        <p>name</p> 
        <p>{{$user->name}}</p>
      </div>
      <button onclick="editUser()" class="bg-orange-500 p-1 px-2 rounded-lg text-white">แก้ไข</button>
    </div>
     <!-- box-mycourse -->
    <div>
      <h1 class="text-xl font-bold">my course</h1>

      
    </div>
  <!-- endbox-mycourse -->
  </div>
  <!-- endbox -->

</div>
@endsection

@section('scripts')
<script>
  let user = {!! json_encode($user) !!};

  async function editUser() {
    try {
        const result = await Swal.fire({
        title: "Edit",
        html: ` @if(null !== $user->img_profile)
                    <img class="w-60 h-70 mx-auto bg-gray-300 rounded-lg" src="${user.img_profile}" id="Opt" alt="">
                @else
                    <img class="w-60 h-70 mx-auto bg-gray-300 rounded-lg" src="image/icon/user.png" id="Opt" alt="">
                @endif
                <input type="file" name="" id="imgInp">
                <input type="text" id="name" class="swal2-input" placeholder="Name" value="${user.name}">
                <input type="email" id="email" class="swal2-input" placeholder="Email" value="${user.email}">
                <input type="text" id="password" class="swal2-input" placeholder="Password" value="">`,
        confirmButtonText: "Submit",
        focusConfirm: false,
        preConfirm: () => {
            const name = Swal.getPopup().querySelector("#name").value;
            const email = Swal.getPopup().querySelector("#email").value;
            const password = Swal.getPopup().querySelector("#password").value;

            const imgInp = Swal.getPopup().querySelector("#imgInp");
            const selectedFile = imgInp.files[0];

            if (!name) {
                Swal.showValidationMessage(`Please enter your data.`);
                // !email || !password
            }
            let param = {
                name: name,
                email: email,
                password: password
            };

            if (selectedFile) {
                param.imgInp = selectedFile;
            }

            console.log(param);
            return param;
        },

        didOpen: () => {
            const imgInp = Swal.getPopup().querySelector("#imgInp");
            const opt = Swal.getPopup().querySelector("#Opt");

            imgInp.onchange = evt => {
                const [file] = imgInp.files;
                if (file) {
                    opt.src = URL.createObjectURL(file);
                }
            };
        }
    });
    if (result.isConfirmed) {
            // ในส่วนนี้เรามีความมั่นใจว่าผู้ใช้กดปุ่ม "Submit"
            const response = await axios.put(`api/dashboard/edituser/${user.id}`, result.value);

            console.log(response);
        }
    } catch (error) {
        console.error(error);
  }
}



</script>
@endsection