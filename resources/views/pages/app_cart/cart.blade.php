@extends('layouts.main')
@section('title') CartPage @endsection
@section('content')
  <div class="pt-32">
    <h1 class="text-3xl text-center font-bold ">หลักสูตรในรถเข็น</h1>
    <div class="flex p-10">
      <!-- detail cartProduct -->
      <div class="w-full border rounded-lg h-[500px] p-10 flex flex-col gap-4 overflow-auto">
        <div class="flex">
          <img class="w-1/3 rounded-lg" src="https://images.unsplash.com/photo-1633356122102-3fe601e05bd2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="course">
          <div class="px-10 w-full flex flex-col justify-between">
            <h1 class="text-2xl font-bold">Course : React JS 20 Workshop </h1>
            <p class="text-gray-400">Khem_Ji</p>
            <div class="flex gap-1">
              <p class="text-yellow-600 font-bold">4.9</p>
              <svg aria-hidden="true" class="w-5 h-5 mb-2 text-yellow-400" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>First star</title>
                  <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
              </svg>
            </div>
            <div class="flex flex-row justify-between">
              <div class="flex gap-4">
                <h1 class="text-xl font-bold">THB 349</h1>
                <h1 class="text-xl text-gray-400 line-through">THB 349</h1>
              </div>
              <p class="cursor-pointer"><box-icon name='trash' color='#a80404'></box-icon></p>
            </div>
          </div>
        </div>
        <hr>

        <div class="flex">
          <img class="w-1/3 rounded-lg" src="https://images.unsplash.com/photo-1633356122102-3fe601e05bd2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="course">
          <div class="px-10 w-full flex flex-col justify-between">
            <h1 class="text-2xl font-bold">Course : React JS 20 Workshop </h1>
            <p class="text-gray-400">Khem_Ji</p>
            <div class="flex gap-1">
              <p class="text-yellow-600 font-bold">4.9</p>
              <svg aria-hidden="true" class="w-5 h-5 mb-2 text-yellow-400" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>First star</title>
                  <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
              </svg>
            </div>
            <div class="flex flex-row justify-between">
              <div class="flex gap-4">
                <h1 class="text-xl font-bold">THB 349</h1>
                <h1 class="text-xl text-gray-400 line-through">THB 349</h1>
              </div>
              <p class="cursor-pointer"><box-icon name='trash' color='#a80404'></box-icon></p>
            </div>
          </div>
        </div>
        <hr>

        <div class="flex">
          <img class="w-1/3 rounded-lg" src="https://images.unsplash.com/photo-1633356122102-3fe601e05bd2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="course">
          <div class="px-10 w-full flex flex-col justify-between">
            <h1 class="text-2xl font-bold">Course : React JS 20 Workshop </h1>
            <p class="text-gray-400">Khem_Ji</p>
            <div class="flex gap-1">
              <p class="text-yellow-600 font-bold">4.9</p>
              <svg aria-hidden="true" class="w-5 h-5 mb-2 text-yellow-400" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>First star</title>
                  <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
              </svg>
            </div>
            <div class="flex flex-row justify-between">
              <div class="flex gap-4">
                <h1 class="text-xl font-bold">THB 349</h1>
                <h1 class="text-xl text-gray-400 line-through">THB 349</h1>
              </div>
              <p class="cursor-pointer"><box-icon name='trash' color='#a80404'></box-icon></p>
            </div>
          </div>
        </div>
        <hr>
      </div>

      <div class="w-full max-w-[400px] px-14">
        <h1 class="text-xl text-gray-400 mb-5">ทั้งหมด</h1>
        <h1 class="text-3xl font-medium">THB : 1,047</h1>
        <h1 class="line-through text-xl text-gray-300">TBH 2,553</h1>
        <h1 class="text-2xl font-bold mb-5">ส่วนลด 70%</h1>
        <hr>
        <div class="flex flex-col gap-3 my-2">
          <h1 class="text-xl">โปรโมชั่น</h1>
          <input type="text" class="rounded-lg border-2 w-full py-1 px-4 shadow-md" placeholder="คูปองส่วนลด">
          <a href="/payment" class="text-center bg-red-600 font-medium text-white rounded-xl py-1">ชำระเงิน</a>
        </div>
      </div>
    </div>
  </div>
@endsection