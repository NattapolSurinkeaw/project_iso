@extends('layouts.main')
@section('meta-description','ISOConsult Elerning - Your Source Everything for  Quality of Products or industry')
@section('title', 'AllCourse')

@section('content')
    <h1 class="my-4 text-3xl text-center"> Elearning All Course</h1>
    {{-- @dd($elcourses) --}}

    <div class="w-10/12 max-xs:w-full max-xs:px-4 mx-auto flex items-center">
        <div class="w-full mx-auto flex flex-wrap items-center justify-between">
            <div class="flex gap-2">
                <h1 class="font-normal text-xl">SEARCHING</h1>
                <h1 id="many-course" class="font-normal text-xl text-red-600">{{$countElerning}}</h1>
            </div>
            <div class="relative text-right absolute inset-y-0">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd">
                        </path>
                    </svg>
                </div>
                <input type="text" id="course-search" class="bg-gray-50 shadow-sm outline-none border border-gray-300 text-gray-900 text-sm rounded-full  block  w-full xl:w-60 pl-10 p-2.5 "
                    placeholder="Search">
                    <ul id="data-searce" class="hidden w-full flex flex-col gap-2 absolute top-11 bg-white p-2 z-[5] rounded-lg border" id="data-search">
                        
                    </ul>
            </div>
        </div>
    </div>

    <div class="w-10/12 my-5 mx-auto grid gap-10 grid-cols-5 max-2xl:grid-cols-3 max-lg:grid-cols-2 max-xs:grid-cols-1">
        @isset($elcourses)
            @if(count($elcourses) > 0)
                @foreach($elcourses as $elcourse)
                <div class="w-full border-2 rounded-xl p-5 flex flex-col justify-center items-center gap-2 shadow-lg">
                        <div class="overflow-hidden rounded-lg h-45 w-full">
                            @if(!empty($elcourse->img_course))
                                <img class="rounded-lg w-full h-44 duration-200 hover:scale-110" src="{{$elcourse->img_course}}" alt="">
                            @else
                                <img class="rounded-lg w-full h-44 duration-200 hover:scale-110" src="/image/icon/isologo.png" alt="">
                            @endif
                        </div> 
                        <div class="w-full flex flex-col items-start gap-2">
                            <div class="w-full flex justify-between items-center">
                                <h1 class="text-2xl font-medium w-full truncate cursor-default" title="{{$elcourse->course_name}}">{{$elcourse->course_name}}</h1>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                @php
                                $categories = $elcourse->category;
                                @endphp
                                @if(isset($categories) && (is_array($categories) || is_object($categories)))
                                    @foreach($categories as $categoryId)
                                        @foreach($cates as $cate)
                                            @if($categoryId == $cate->id)
                                                <a href="/elerning/{{$cate->id}}">
                                                    <div class="bg-gray-400 rounded-full px-2">
                                                        {{ $cate->category_name }}
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @elseif(!empty($categories))
                                    @php
                                        $categories = json_decode($categories); // แปลง JSON เป็นอาร์เรย์
                                    @endphp
                                    @foreach($categories as $categoryId)
                                        @foreach($cates as $cate)
                                            @if($categoryId == $cate->id)
                                                <a href="/elerning/{{$cate->id}}">
                                                    <div class="bg-gray-400 rounded-full px-2">
                                                        {{ $cate->category_name }}
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endif
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
                                    <a class="bg-blue-600 text-white rounded-md p-1 " href="/coursedetail/{{$elcourse->id}}">detail</a>
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
                                            <a href="{{url('/course/'.$elcourse->id)}}" class="bg-green-500 text-white rounded-md p-1">Learn</a>
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

    <div id="box-search" class="w-10/12 my-5 mx-auto grid gap-10 grid-cols-5 max-2xl:grid-cols-3 max-lg:grid-cols-2 max-xs:grid-cols-1">

    </div>

    <div class="w-10/12 flex justify-end mx-auto my-4">
        <div>
            <button id="prevPage" class="text-white px-3 py-1 rounded-lg">Prev</button>
            <button id="nextPage" class="text-white px-3 py-1 rounded-lg">Next</button>
        </div>
    </div>
    

@endsection

@section('scripts')
<script>
    
    // pagination
    let countElerning = {!! $countElerning !!}
    const itemsPerPage = 10;
    const totalPages = Math.ceil(countElerning / itemsPerPage);
    let prevPage = document.querySelector('#prevPage');
    let nextPage = document.querySelector('#nextPage');

    const currentURL = window.location.href;
    const url = new URL(currentURL);
    const currentPage = parseInt(url.searchParams.get('page') || 1);

    window.addEventListener('load', function() {
        // console.log(currentPage);
        if (currentPage <= 1) {
        // ถ้าหน้าปัจจุบันเป็นหน้าแรก ปิดปุ่ม "กลับ"
        // console.log("ปิดปุ่มกัลบ")
        prevPage.disabled = true; // ปิดปุ่ม "กลับ"
        prevPage.classList.add('bg-gray-400')
        } else {
            prevPage.classList.add('bg-blue-500')
        }

        if (currentPage >= totalPages) {
            // ถ้าหน้าปัจจุบันเป็นหน้าสุดท้าย หรือหน้าเดียว
            nextPage.disabled = true; // ปิดปุ่ม "ถัดไป"
            nextPage.classList.add('bg-gray-400')
            // console.log("ปิดปุ่มทัดไป")
        }else {
            nextPage.classList.add('bg-green-400')
        }
    });
    
    prevPage.addEventListener('click', function() {
        const prevPageValue = currentPage - 1;
        if (prevPageValue >= 1) { // ตรวจสอบว่าหน้าก่อนหน้ามีค่ามากกว่าหน้าแรก
            location.href = `/elerning?page=${prevPageValue}`;
        }
    })
    
    nextPage.addEventListener('click', function() {
        const nextPageValue = currentPage + 1;
        if (nextPageValue <= totalPages) { // ตรวจสอบว่าหน้าถัดไปมีค่าน้อยกว่าหรือเท่ากับหน้าสุดท้าย
            location.href = `/elerning?page=${nextPageValue}`;
        }
    })

    // Function addCart
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

    // Function Search 
    let courses = @json($elcourses);
    let inputSearch = document.querySelector('#course-search');
    let data_searce = document.querySelector('#data-searce');
    
    inputSearch.addEventListener('keyup', () => {
        let dataSearch = inputSearch.value;
        if(dataSearch){
            data_searce.classList.remove('hidden');
            console.log(dataSearch);
            console.log(courses);
            if (courses && courses.data) {
                let matchingCourses = courses.data.filter(course => {
                    let courseName = course.course_name.toLowerCase();
                    let searchData = dataSearch.toLowerCase();
                    return courseName.includes(searchData);
                    
                });
                set_form_search(matchingCourses); // ส่ง matchingCourses เข้าไปในฟังก์ชัน
                // ทำสิ่งที่คุณต้องการกับ matchingCourses
            } else {
                let coursesArray = Object.values(courses);

                let matchingCourses = coursesArray.filter(course => {
                    let courseName = course.course_name.toLowerCase();
                    let searchData = dataSearch.toLowerCase();
                    return courseName.includes(searchData);
                });
                set_form_search(matchingCourses); // ส่ง matchingCourses เข้าไปในฟังก์ชัน
            }
            
            
        } else {
            data_searce.classList.add('hidden');
        }

    })

    function set_form_search(matchingCourses){
        if(matchingCourses) {
            console.log(matchingCourses);

            // render content
            data_searce.innerHTML = ''; // เคลียร์ค่าเดิม
            matchingCourses.forEach(element => {
                data_searce.innerHTML += renderData(element.id, element.img_course, element.course_name, element.price);
            });
        }
    }

    function renderData(id, img_course, course_name, price) {
        let content = `<a href="/coursedetail/${id}">
                            <li class="w-full flex justify-between items-center gap-4 hover:bg-gray-100">
                                <div>
                                    <img class="w-10 h-10" src="${img_course}" alt="">
                                </div>
                                <div>
                                    <p>${course_name}</p>
                                </div>
                                <div>
                                    <p>${price}</p>
                                </div>
                            </li>
                        </a>
                    `;
        return content;
    }

</script>
@endsection