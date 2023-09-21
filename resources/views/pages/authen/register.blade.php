@extends('layouts.main')
@section('title') Register @endsection
@section('content')
    <div class="h-[94%] w-full bg-blue-100 flex justify-center items-center">
        <div class="w-10/12 h-9/12 bg-white rounded-lg flex">
            <div class="w-full border-r-2">
                <img class="w-full h-full rounded-l-lg" src="/image/background/login.jpg" alt="">
            </div>
            <div class="w-full p-8 rounded-r-lg flex flex-col justify-center items-center gap-5">
                <h1 class="text-xl font-normal leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Register to your account
                </h1>
                <div class="w-10/12">
                    <label for="name" class="block mb-2 text-sm font-ligth text-gray-900 dark:text-white">Your
                        name</label>
                    <input type="name" name="name" id="fname"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="firtname lastname" required="">
                        <p id="ms-er-name" class="ml-2 hidden text-red-500 text-sm">validate name error</p>
                </div>
                <div class="w-10/12">
                    <label for="email" class="block mb-2 text-sm font-ligth text-gray-900 dark:text-white">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    <p id="ms-er-email" class="ml-2 hidden text-red-500 text-sm">validate email error please fill type email </p>
                </div>
                <div class="w-10/12">
                    <label for="password" class="block mb-2 text-sm font-ligth text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" onkeydown="if (event.key === 'Enter') onRegister()" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    <p id="ms-er-pass" class="ml-2 hidden text-red-500 text-sm">validate password error</p>
                </div>
                <button onclick="onRegister()" class="w-1/2 bg-green-600 border-b-4 border-green-600 hover:bg-green-500 hover:border-b-4 hover:border-green-700 font-normal rounded-lg text-md text-white px-5 py-2.5 text-center mt-4 duration-200">register</button>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">I have an account 
                    <a href="/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign in</a>
                </p>
            </div>
        </div>
    </div>
@endsection

<script>
// เก็บ session หน้า register
document.addEventListener("DOMContentLoaded", function() {
    sessionStorage.setItem('fromRegister', 'true');
});

// document.addEventListener("DOMContentLoaded", function () {
//     document.querySelector('#password').addEventListener('keydown', function (event) {
//         if (event.key === 'Enter') {
//             // เรียกใช้ฟังก์ชัน onLogin หากปุ่ม Enter ถูกกด
//             onRegister();
//         }
//     });
// });

function onRegister() {
    let name = document.querySelector('#fname').value;
    let email = document.querySelector('#email').value;
    let password = document.querySelector('#password').value;
    let msNameEr = document.querySelector('#ms-er-name');
    let msEmailEr = document.querySelector('#ms-er-email');
    let msPassEr = document.querySelector('#ms-er-pass');

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
                if (response.data.message === 'success') {
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
                else {
                    msNameEr.classList.add('hidden');
                    msPassEr.classList.add('hidden');
                    msEmailEr.classList.remove('hidden');
                    msEmailEr.innerHTML = "This email has already been used"
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Email fail',
                        text: 'This email has already been used',
                        showConfirmButton: true,
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
            msEmailEr.classList.remove('hidden');
            // Swal.fire({
            //     position: 'center',
            //     icon: 'error',
            //     title: 'Registration Email failed',
            //     text: 'Please check your fill email',
            //     showConfirmButton: true
            // });
        }
    } 
    else {
        msNameEr.classList.remove('hidden');
        msEmailEr.classList.remove('hidden');
        msPassEr.classList.remove('hidden');
        // Swal.fire({
        //     position: 'center',
        //     icon: 'error',
        //     title: 'Login failed',
        //     text: 'Please check your credentials and try again.',
        //     showConfirmButton: true
        // });
    }
}

</script>