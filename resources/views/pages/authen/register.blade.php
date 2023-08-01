@extends('layouts.main')
@section('title') Register @endsection
@section('content')
    <div class="mx-auto w-4/5 bg-red-200">
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8 flex flex-col items-center">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Register to your account
                        </h1>
                        <div class="w-full">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                              name</label>
                          <input type="name" name="name" id="fname"
                              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="firtname lastname" required="">
                        </div>
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
                        <button onclick="onRegister()" class="w-1/2 border bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 mt-4">register</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            I have an account <a href="/login"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

<script>

function onRegister() {
    let name = document.querySelector('#fname').value;
    let email = document.querySelector('#email').value;
    let password = document.querySelector('#password').value;

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (name && email && password) {
        if (emailRegex.test(email)) {
            let data = {
                name: name,
                email: email,
                password: password
            };
            console.log(data);
            
            axios.post('api/auth/register', data)
            .then((response) => {
                if (response.data.message === 'error') {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Email fail',
                        text: 'This email has already been used',
                        showConfirmButton: false,
                        timer: 1000
                    });
                } 
                else {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'registration successful',
                        text: 'your registration has been registered',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(() => {
                        location.href = '/login';
                    });
                }
            })
            .catch((error) => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Registration failed',
                    text: 'Please check your registration details and try again.',
                    showConfirmButton: true
                });
            });
        } 
        else {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Registration Email failed',
                text: 'Please check your fill email',
                showConfirmButton: true
            });
        }
    } 
    else {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Registration failed',
            text: 'Please check your registration details and try again.',
            showConfirmButton: true
        });
    }
}



</script>