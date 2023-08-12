@extends('layouts.main')
@section('title')
    AllCourse
@endsection
@section('content')
    <h1 class="pt-20 text-3xl text-center"> Elerning All Course</h1>
    {{-- @dd($elcourses) --}}

    <div class="container mx-auto flex items-center flex-wrap pt-4 ">

        <nav id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                <h1 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl ">Course
                </h1>
                <div class="flex items-center" id="store-nav-content">
                    <div class="relative text-right absolute inset-y-0 right-0">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 shadow-sm outline-none border border-gray-300 text-gray-900 text-sm rounded-full  block  w-full xl:w-60 pl-10 p-2.5 "
                            placeholder="Search" required>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="my-5 px-16 mx-auto grid gap-5 xl:grid-cols-5 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
        @isset($elcourses)
            @if(count($elcourses) > 0)
                @foreach($elcourses as $elcourse)
                <div class="w-64 border-2 rounded-xl p-5 flex flex-col justify-center items-center gap-4 shadow-lg">
                    <a href="/course/{{$elcourse->id}}">
                        <div class="overflow-hidden rounded-lg">
                            <img class="rounded-lg h-48 duration-200 hover:scale-125" src="https://media.istockphoto.com/id/1386672355/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%98%E0%B8%B8%E0%B8%A3%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%A7%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B9%89%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%A1%E0%B9%89%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A7%E0%B8%9A%E0%B8%84%E0%B8%B8%E0%B8%A1%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%90%E0%B8%B2%E0%B8%99-iso-%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87%E0%B8%AA%E0%B8%B5%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%A1.jpg?s=2048x2048&w=is&k=20&c=ewFbxo6qEvqesJqqhsXGzeyMSoo_Dyhac4r1gqFeJ8k=" alt="">
                        </div> 
                        <div class="w-full flex flex-col items-start">
                            <h1 class="text-2xl font-bold w-52 truncate">{{$elcourse->course_name}}</h1>
                            <h1 class="text-gray-400">{{$elcourse->user_name}}</h1>
                            <div class="flex">
                                <h1 class="text-yellow-500">4.9</h1>
                                <svg aria-hidden="true" class="w-5 h-5 mb-2 text-yellow-500 dark:text-gray-500"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <div class="w-full flex justify-between gap-4">
                                <div class="flex">
                                    <h1 class="font-bold">THB{{number_format($elcourse->price)}}</h1>
                                    <h1 class="text-gray-300 ml-2 line-through">THB1,200</h1>
                                </div>
                                <a class="bg-blue-500 rounded-md p-1" href="/coursedetail/{{$elcourse->id}}">detail</a>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            @else
                <div>
                    <h1 class="text-3xl">Nodata</h1>
                </div>
            @endif
        @endisset
    </div>
    

@endsection

@section('scripts')

<script>
</script>

@endsection