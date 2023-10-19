@extends('layouts.main')
@section('title') Login @endsection
@section('content')
    <div class="h-[94%] w-full bg-blue-100 flex justify-center items-center">
        <div class="w-10/12 h-9/12 bg-white rounded-lg flex max-lg:flex-col">
            <div class="w-full border-r-2 max-sm:hidden">
                <img class="w-full h-full rounded-l-lg" src="/image/background/login.jpg" alt="">
            </div>
            <div class="w-full rounded-r-lg flex flex-col justify-center items-center gap-5">
                <h1 class="m-4 text-xl font-normal leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Sign in to your account
                </h1>
                <div class="w-10/12 flex flex-col">
                    <label for="email" class="block mb-2 text-sm font-ligth text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@company.com" required>
                </div>
                <div class="w-10/12">
                    <label for="password"
                        class="block mb-2 text-sm font-ligth text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" onkeydown="if (event.key === 'Enter') onLogin()" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <button onclick="onLogin()" class="w-1/2 border bg-blue-600 hover:bg-blue-500 font-ligth rounded-lg text-md text-white px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 mt-4">login</button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">Don’t have an account yet? 
                    <a href="/register"class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                </p>
            </div>
        </div>
    </div>
@endsection

<script>

  function onLogin() {
    let data = {
      email: document.querySelector('#email').value,
      password: document.querySelector('#password').value,
    }
    console.log(data);

    axios.post('api/auth/login', data)
    .then((response) => {
        const role = response.data.data.role;
        const fromRegister = sessionStorage.getItem('fromRegister');
        console.log(response.data.data.role);

        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Login Success',
            showConfirmButton: false,
            timer: 1000
        }).then(() => {
            if (fromRegister) {
                // ลบข้อมูลที่บันทึกไว้
                sessionStorage.removeItem('fromRegister');
                // ไปที่หน้า home
                window.location.href = '/';
            } else {
                if (role === 'admin') {
                    window.location.href = 'backend/';
                } else if (role === 'user') {
                    // กลับไปที่หน้าก่อนหน้า
                    history.back();
                }
            }
        });
    })
    .catch((error) => {
        console.log(error);
        // Handle the error here, such as displaying an error message to the user
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Login failed',
            text: 'Please check your credentials and try again.',
            showConfirmButton: true
        });
    });
    
  }
</script>
