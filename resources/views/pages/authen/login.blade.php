@extends('layouts.main')
@section('title') Login @endsection
@section('content')
    <div class="h-screen w-screen bg-gray-50 dark:bg-gray-900">
            <div class="w-full h-full flex flex-col items-center justify-center px-6 py-8 lg:py-0">
                <div class="bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8 flex flex-col items-center">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign in to your account
                        </h1>
                        <div class="w-full">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div class="w-full">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <button onclick="onLogin()"
                            class="w-1/2 border bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 mt-4">login</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="/register"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                        </p>
                    </div>
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
        const fromRegister = sessionStorage.getItem('fromRegister');
        console.log(response.data);
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
                // กลับไปที่หน้าก่อนหน้า
                history.back();
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
