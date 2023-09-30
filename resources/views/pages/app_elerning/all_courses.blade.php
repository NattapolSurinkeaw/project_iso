@extends('layouts.main')
@section('title')
    AllCourse
@endsection
@section('content')
    <h1 class="my-4 text-3xl text-center"> Elearning All Course</h1>
    {{-- @dd($elcourses) --}}

    <div class="container mx-auto flex items-center flex-wrap pt-4 ">

        <nav id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                <h1 class="uppercase tracking-wide no-underline hover:no-underline font-nrmal text-gray-800 text-xl">Course</h1>
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

    <div class="w-10/12 my-5 mx-auto grid gap-10 xl:grid-cols-5 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
        @isset($elcourses)
            @if(count($elcourses) > 0)
                @foreach($elcourses as $elcourse)
                <div class="w-full border-2 rounded-xl p-5 flex flex-col justify-center items-center gap-2 shadow-lg">
                        <div class="overflow-hidden rounded-lg h-45 w-full">
                            @if(!empty($elcourse->img_course))
                                <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="{{$elcourse->img_course}}" alt="">
                            @else
                                <img class="rounded-lg w-64 h-44 duration-200 hover:scale-125" src="/image/icon/isologo.png" alt="">
                            @endif
                        </div> 
                        <div class="w-full flex flex-col items-start gap-2">
                            <div class="w-full flex justify-between items-center">
                                <h1 class="text-2xl font-medium w-full truncate">{{$elcourse->course_name}}</h1>
                                <a class="text-blue-600 rounded-md p-1" href="/coursedetail/{{$elcourse->id}}">detail</a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <div class="bg-gray-400 rounded-full px-2">
                                    dodpd
                                </div>
                                <div class="bg-gray-400 rounded-full px-2">
                                    dodpd
                                </div>
                                <div class="bg-gray-400 rounded-full px-2">
                                    doddasdaspd
                                </div>
                            </div>
                            <div class="w-full flex justify-between gap-4">
                                <div class="flex gap-2">
                                    <h1 class="font-medium text-gray-400">Price</h1>
                                    <h1 class="font-medium">{{number_format($elcourse->price)}} THB</h1>
                                </div>
                            </div>

                            <div class="w-full flex justify-between items-center">
                                <div class="flex justify-between">
                                    <h1 class="text-lg text-gray-400">{{$elcourse->user_name}}</h1>
                                </div>
                                <div class="w-full flex gap-2 justify-end">
                                    @if($user)
                                        @php
                                            $isAddedToCart = false; // สร้างตัวแปรเพื่อตรวจสอบว่ามีการเพิ่มลงในตะกร้าหรือไม่
                                        @endphp
                        
                                        @foreach($mycourse as $mcourse)
                                            @if($elcourse->id == $mcourse->elerningcourse_id)
                                                @php
                                                    $isAddedToCart = true; // ถ้าพบรายการที่ตรงกันในตะกร้า กำหนดให้ $isAddedToCart เป็น true
                                                    break; // ออกจากลูป
                                                @endphp
                                            @endif
                                        @endforeach
                        
                                        @if($isAddedToCart)
                                            <a href="{{url('/course/'.$elcourse->id)}}" class="bg-green-500 text-white rounded-md p-1">ซื้อแล้ว</a>
                                        @else
                                            <button class="bg-red-500 text-white rounded-md p-1" id="add-to-cart" data-id="{{$elcourse->id}}">add cart</button>
                                        @endif
                                    @else
                                        <a href="/login" class="bg-red-500 text-white rounded-md p-1">add cart</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
            @else
                <div>
                    <h1 class="text-3xl">Nodata</h1>
                </div>
            @endif
        @endisset
    </div>

    <div class="mx-20 flex justify-end">
        <div class="w-96">
            {{ $elcourses->links() }}
        </div>
    </div>
    

@endsection

@section('scripts')
<script>
function addPayment() {
    console.log('addPayment')
}

    document.addEventListener('DOMContentLoaded', function () {
        const addToCartButtons = document.querySelectorAll('#add-to-cart');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function () {
                const courseId = button.getAttribute('data-id');
                addToCart(courseId);
            });
        });

        function addToCart(courseId) {
            axios.post('/add-to-cart', {
                course_id: courseId
            })
            .then(response => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: response.data.message,
                    showConfirmButton: false,
                    timer: 1000
                })
                console.log(response.data.message);
                // คุณสามารถทำอะไรก็ได้หลังจากเพิ่มคอร์สลงใน Session แล้ว
            })
            .catch(error => {
                console.error('An error occurred:', error);
            });
        }
    });
</script>
@endsection