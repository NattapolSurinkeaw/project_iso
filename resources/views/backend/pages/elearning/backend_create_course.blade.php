@extends('backend.layouts.main')
@section('title') Create Elearning @endsection
@section('container')

<div class="h-screen">
    <div class="m-1">
      <a href="{{url('/backend/coruse')}}" class="bg-red-500 text-white text-lg px-2 rounded">กลับ</a>
    </div>
    <h1 class="w-full text-xl font-bold text-center">Create Elearning</h1>
    
    <div class="bg-white border-l-8 border-l-indigo-500 rounded-xl p-4 m-10">
        <div class="animate__animated animate__bounce flex justify-between ">
            <img class="h-8" src="/image/icon/category.png" alt="">
            <h1 class="text-xl">Manage Category</h1>
            <button onclick="createCate()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
        </div>
        <hr class="h-px mt-4 bg-gray-200 border-0 dark:bg-gray-700">
        {{-- @if (count($cates) > 0) --}}
        <div class="grid grid-cols-3 gap-3 p-4">
            {{-- @foreach ($cates as $cate) --}}
            <div class="flex items-center gap-2">
                <input type="checkbox" name="category" cate_id="" id="category" />
                    
                <label id="output-cate" class="" for="category_">ddd</label>
                <input id="input-cate" class="w-40 border hidden" type="text" value="">
                <div class="flex gap-2">
                    <button class="" id="edit-cate" cate_id=""><img src="/image/icon/penedit.png" class="w-4 h-4" alt=""></button>
                    <button class="" id="delete-cate" cate_id=""><img src="/image/icon/delete.png" class="w-4 h-4" alt=""></button>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
        <hr>
        <div id="action-cate" class="my-2 w-full flex justify-end gap-2 hidden">
            <button onclick="addcategory()" class="mx-end bg-green-500 text-white rounded-lg py-1 px-3">save</button>
            <button id="hiddenaction" class="mx-end bg-red-500 text-white rounded-lg py-1 px-2">cancle</button>
        </div>
        {{-- @else --}}
            <p class="my-4">no category</p>
            <p>null</p>
        {{-- @endif --}}
    </div>

    <div class="bg-white border-l-8 border-l-indigo-500 rounded-xl p-4 m-10">
        <div class="animate__animated animate__bounce flex justify-between ">
            <img class="h-8" src="/image/icon/annouce.png" alt="">
            <h1 class="text-xl">Anoucement</h1>
            <button onclick="addAnnouce()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
        </div>
        <hr class="h-px mt-4 bg-gray-200 border-0 dark:bg-gray-700">
        {{-- @if (count($announcements) > 0)
            @foreach ($announcements as $announcement) --}}
                <div class="flex p-4 justify-between items-center">
                    <div class="w-full">
                        <p class="">ประกาศ</p>
                        <p>10-12-23</p>
                    </div>
                    <div class="w-40">
                        <button class="w-16 p-1 bg-yellow-400 text-white text-center rounded-lg">แก้ไข</button>
                        <button class="w-16 p-1 bg-red-500 text-white text-center rounded-lg">ลบ</button>
                    </div>
                </div>
                <hr>
            {{-- @endforeach
        @else
            <p class="my-4">no announcement</p>
            <p>null</p>
        @endif --}}
    </div>

    <div class="bg-white border-l-8 border-l-yellow-500 rounded-xl p-4 m-10">
        <div class="animate__animated animate__bounce flex justify-between">
          <img class="h-8" src="/image/icon/material-icon.png" alt="">
          <h1 class="text-xl">Course Material</h1>
          <button onclick="addMaterial()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
        </div>
        <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
  
        {{-- @foreach($materials as $item) --}}
        <div class="w-full relative">
            <p class="my-5">ddd</p>
            <div class="h-0 overflow-hidden transition-all duration-300 ease-in-out" id="content-material">
            <a href="" target="_bank" class="text-blue-500">เอกสาร</a>
                <div class="mt-4">
                    {{-- @php
                    $course_video ="";
                    if($item->input_type == 'youtube' || $item->input_type == 'vimeo'){
                        $embed = \Embed::make($item->video_url)->parseUrl();
                        $course_video = $embed->getHtml();
                    } else if ($item->input_type == 'drive') {
                        $course_video = '<iframe src="' . $item->video_url . '" width="600px" height="300" allow="autoplay"></iframe>';
                    } else {
                        $course_video = "ไม่มีวิดีโอ";
                    }
                    @endphp
                    {!!$course_video !!} --}}
                </div>
            </div>
            <div class="flex gap-2 absolute top-0 right-0">
                <div class="cursor-pointer" id="action-material">
                    <box-icon type='solid' name='chevrons-right' class="" id="right"></box-icon>
                    <box-icon name='chevrons-down' type='solid' class="hidden" id="bottom"></box-icon>
                </div>
                <img class="w-5 h-5" src="/image/icon/penedit.png" alt="">
                <img class="w-5 h-5" src="/image/icon/delete.png" alt="">
            </div>
        </div>
        <p class="text-gray-400">07-feb-23, 08.02 Am</p>
        <hr>
        {{-- @endforeach --}}
    </div>

    <div class="bg-white border-l-8 border-l-red-500 rounded-xl p-4 m-10">
        <div class="animate__animated animate__bounce flex justify-between ">
            <img class="h-8" src="/image/icon/assignment.png" alt="">
            <h1 class="text-xl">Asssignment</h1>
            <button onclick="addQuiz()"><img class="w-7 h-7" src="/image/icon/addicon.png" alt=""></button>
        </div>
        <hr class="my-4 bg-gray-200 border-1">
        @if (1)
                <div class="flex justify-between items-center">
                    <div>
                        <p class="my-4 text-green-500 cursor-pointer">Name :</p>
                    </div>
                    <div>
                        <p class="my-4 text-green-500 cursor-pointer">Quiz type : </p>
                    </div>
                    <div>
                        <p class="my-4 text-green-500 cursor-pointer">Total Question : 10</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ url('/backend/question-table/') }}" class="p-1 bg-blue-500 text-white rounded-lg">คำถาม</a>
                        <button class="p-1 bg-yellow-400 text-white rounded-lg">แก้ไข</button>
                        <button class="p-1 bg-red-500 text-white rounded-lg">ลบ</button>
                    </div>
                </div>
                <hr>
            {{-- @endforeach --}}
        @else
            <p class="my-4">no Asssignment</p>
            <p>null</p>
        @endif
    </div>
</div>

@endsection