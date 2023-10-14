@extends('backend.layouts.main')
@section('title')
    News And Events
@endsection
@section('container')
    <div class="h-screen">
        <div class="mx-10 my-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">News And Events</h1>
            <a href="/backend/createnews" id="createnews"
                class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</a>
        </div>

        <div class="h-[750px] max-2xl:w-[90%] max-xl:w-[80%] overflow-y-scroll mx-10">
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
                        {{-- <th scope="col" class="px-6 py-3">
                            content
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            view
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
                    {{-- @dd($newsevents) --}}
                    @foreach ($newsevents as $news)
                        <tr class="bg-white dark:bg-gray-800 border-b-2">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                {{ $news->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $news->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $news->description }}
                            </td>
                            {{-- <td class="w-[100px] px-6 py-4">
                                {{ substr($news->content, 0, 500) }}
                                {!! Str::limit($news->content, 100) !!}
                            </td> --}}
                            <td class="px-6 py-4">
                                {{ $news->view }}
                            </td>
                            <td class="px-6 py-4">
                                @if (!empty($news->img_news_events))
                                    <img class="w-20 h-20" src="{{ $news->img_news_events }}" alt="">
                                @else
                                    <img class="w-20 h-20" src="/image/icon/isologo.png" alt="">
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if (!empty($news->updated_at))
                                    {{ $news->updated_at }}
                                @else
                                    null
                                @endif
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="/backend/editnews/{{ $news->id }}"
                                    class="bg-yellow-500 p-2 w-14 rounded-lg text-white text-center" data-id=""
                                    id="editCourse">แก้ไข</a>
                                <button onclick="delNews({{ $news->id }})"
                                    class="bg-red-600 p-2 w-14 rounded-lg text-white text-center">ลบ</button>
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
    function delNews(news_id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`/api/backend/delnews/${news_id}`).then((response) => {
                    console.log(response.status);
                    if (response.status = "success") {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        ).then(() => {
                            location.reload();
                        })
                    }
                })

            }
        })

    }
</script>
@endsection
