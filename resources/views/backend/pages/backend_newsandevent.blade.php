@extends('backend.layouts.main')
@section('title') News And Events @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">News And Events</h1>
        <button type="button" id="createnews" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
    </div>
    
    <div class="relative h-4/5 my-10 overflow-y-scroll mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-tl-lg">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        content
                    </th>
                    <th scope="col" class="px-6 py-3">
                        img_news_events
                    </th>
                    <th scope="col" class="px-6 py-3">
                        updated_at
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-tr-lg">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($newsevents as $news)
                <tr class="bg-white dark:bg-gray-800 border-b-2">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                        {{$news->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$news->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$news->name}}
                    </td>
                    <td class="px-6 py-4 ">
                        {{$news->content}}
                    </td>
                    <td class="px-6 py-4">
                        @if(!empty($news->img_news_events))
                        <img class="w-20 h-20" src="" alt="">
                        @else
                        <img class="w-20 h-20" src="/image/icon/isologo.png" alt="">
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if(!empty($news->updated_at))
                        {{$news->updated_at}}
                        @else
                        null
                        @endif
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <a class="bg-blue-600 p-2 rounded-lg text-white w-24 text-center" href="/backend/coursedetail/">ลายละเอียด</a>
                        <button class="bg-yellow-500 p-2 rounded-lg text-white text-center"  data-id="" id="editCourse">แก้ไข</button>
                        <button class="bg-red-600 p-2 rounded-lg text-white text-center" >ลบ</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('be-scripts')
<script>

    createnews.onclick = env => {
        Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'The function has not yet been activated.',
        cancelButtonColor: '#d33',
        })
    }
    

</script>
@endsection