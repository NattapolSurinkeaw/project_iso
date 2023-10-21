@extends('layouts.main')
@section('title') Dashboard @endsection
@section('content')
<div class="py-4 px-1 gap-4 flex max-xs:flex-col">
  @include('pages.app_dashboard.components.sidebar')
  <!-- box-profile -->
  <div class="w-full max-2xl:max-w-[80%] max-lg:max-w-[68%] max-xs:max-w-[100%] bg-gray-100 rounded-lg p-4 flex flex-col items-center gap-4">
    <h1 class="text-2xl font-medium">Reservation History</h1>
    
    <div id="table-train" class="relative w-full h-4/5 max-2xl:max-h-[680px] max-lg:max-h-[980px] overflow-scroll mx-10">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 max-2xl:h-[50%]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-tl-lg font-medium">
                  No.
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                  Company
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                  Course
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                  participants
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                  Tel
                </th>
                <th scope="col" class="px-6 py-3 text-center font-medium">
                  Email
                </th>
                <th scope="col" class="px-6 py-3 text-center font-medium">
                  status
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                  date train
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                  date reserve
                </th>
                <th scope="col" class="px-6 py-3 rounded-tr-lg font-medium">
                  actions
                </th>
            </tr>
        </thead>
        <tbody>
          @if(count($pendig_train) > 0)
          @php $i = 1; @endphp
          @foreach ($pendig_train as $pending)
            <tr class="bg-white dark:bg-gray-800 border-b-2">
              <td scope="row"
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                {{ $i++; }}
              </td>
              <td scope="row"
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                {{ $pending->company }}
              </td>
              {{-- <td class="px-6 py-4">
                <p class="block">
                    @foreach ($courses as $course)
                    @if (in_array($course->id, explode(',', $pending->total_courses)))
                    <p>{{ $course->course_name }}</p>
                    @endif
                    @endforeach
                </p>
              </td> --}}
              <td class="px-6 py-4">
                {{$pending->training_reserve}}
              </td>
              <td class="px-6 py-4">
                {{$pending->number_participants}}
              </td>
              <td class="px-6 py-4">
                {{$pending->reserve_tel}}
              </td>
              <td class="px-6 py-4 flex justify-center">
                {{$pending->reserve_email}}
              </td>
              <td class="px-6 py-4">
                @if ($pending->status === 'pending')
                <p class="bg-yellow-500 text-white text-center px-3 py-1 rounded-lg">pending</p>
                @elseif ($pending->status === 'approve')
                <p class="bg-green-500 text-white text-center px-3 py-1 rounded-lg">approve</p>
                @elseif ($pending->status === 'reject')
                <p class="bg-red-500 text-white text-center px-3 py-1 rounded-lg">reject</p>
                @else
                <p class="bg-gray-500 text-white text-center px-3 py-1 rounded-lg">unknown status</p>
                @endif
              </td>
              <td class="px-6 py-4">
                <p class="w-24">{{ \Carbon\Carbon::parse($pending->date_reserve)->format('d-M-Y') }}</p>
              </td>
              <td class="px-6 py-4">
                @if (!empty($pending->updated_at))
                <p class="w-20">{{ $pending->created_at->format('d-M-y') }}</p>
                @else
                null
                @endif
              </td>
              <td class="flex px-6 py-4">
                <a class="bg-blue-600 p-2 rounded-lg text-white w-24 text-center"
                    href="/reservedetail/{{$pending->id}}">ลายละเอียด</a>
              </td>
            </tr>
          @endforeach
          @else
          <tr>
            <td colspan="9" class="text-center">No data reserve</td>
          </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
  <!-- endbox -->

</div>
@endsection