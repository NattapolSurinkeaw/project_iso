@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="pt-20 px-1 h-screen gap-4 flex ">
  <div class="w-full max-w-[240px] bg-gray-300 px-2 rounded-xl">
      @include('pages.app_dashboard.components.sidebar')
  </div>
  <div class="w-full bg-gray-100 rounded-lg p-4 flex flex-col items-center gap-4">
    <h1 class="text-xl font-bold">Purchase History</h1>

    <div id="table-train" class="relative h-4/5 overflow-y-scroll mx-10">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-tl-lg">
                  ชื่อที่โอน
                </th>
                <th scope="col" class="px-6 py-3">
                  Course
                </th>
                <th scope="col" class="px-6 py-3">
                    price
                </th>
                <th scope="col" class="px-6 py-3">
                  status
                </th>
                <th scope="col" class="px-6 py-3">
                  comment
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                  slip
                </th>
                <th scope="col" class="px-6 py-3">
                  วันที่ซื้อ
                </th>
                <th scope="col" class="px-6 py-3">
                  วันที่ตอบกลับ
                </th>
                <th scope="col" class="px-6 py-3 rounded-tr-lg">
                  actions
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($pendingCourses as $pending)
            <tr class="bg-white dark:bg-gray-800 border-b-2">
              <th scope="row"
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                {{ $pending->name }}
              </th>
              <td class="px-6 py-4">
                <p class="block">
                    @foreach ($courses as $course)
                    @if (in_array($course->id, explode(',', $pending->total_courses)))
                    <p>{{ $course->course_name }}</p>
                    @endif
                    @endforeach
                </p>
              </td>
              <td class="px-6 py-4">
                {{ $pending->total_price }}
              </td>
              <td class="px-6 py-4">
                @if ($pending->status === 'pending')
                <p class="bg-yellow-500 text-white px-3 py-1 rounded-lg">pending</p>
                @elseif ($pending->status === 'approve')
                <p class="bg-green-500 text-white px-3 py-1 rounded-lg">approve</p>
                @elseif ($pending->status === 'reject')
                <p class="bg-red-500 text-white px-3 py-1 rounded-lg">reject</p>
                @else
                <p class="bg-gray-500 text-white px-3 py-1 rounded-lg">unknown status</p>
                @endif
              </td>
              <td class="px-6 py-4">
                {{ $pending->comment}}
              </td>
              <td class="px-6 py-4 flex justify-center">
                <img class="w-18 h-20" src="{{ $pending->payment_slip}}" alt="">
              </td>
              <td class="px-6 py-4">
                {{ $pending->created_at->format('d-M-y') }}
              </td>
              <td class="px-6 py-4">
                @if (!empty($pending->updated_at))
                {{ $pending->updated_at->format('d-M-y') }}
                @else
                null
                @endif
              </td>
              <td class="px-6 py-4">
                <a class="bg-blue-600 p-2 rounded-lg text-white w-24 text-center"
                    href="/purchasedetail/{{$pending->id}}">ลายละเอียด</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
