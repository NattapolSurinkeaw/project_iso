@extends('layouts.main')
@section('title') Alltraning @endsection
@section('content')
  <div class="mb-4">
    <img class="w-full h-96" src="/image/background/img-training.png" alt="thumbnail-training">
  </div>
  <div class="w-11/12 m-auto px-8">
    {{-- <h1 class="text-3xl text-center mb-4">All Course</h1> --}}
    <div class="flex flex-col w-full overflow-auto">
      <table class="min-w-full text-left text-sm font-light">
        <tbody>
          @isset($courses)
            @if(count($courses) > 0)
              @php
                $currentModule = null;
                $i = 1;
              @endphp
      
              @foreach($courses as $course)
                @if ($course->module_id !== $currentModule)
                <!-- แสดงชื่อ module จาก $modules -->
                <tr>
                  <td colspan="6" class="whitespace-nowrap px-6 py-4 font-medium bg-gray-200 text-center">
                    Module {{ $i++ }} {{ $modules->where('id', $course->module_id)->first()->name }}
                  </td>
                </tr>
                <!-- แสดงหัวข้อตาราง -->
                <tr>
                  <th scope="col" class="px-6 py-4">CODE</th>
                  <th scope="col" class="px-6 py-4">COURSE</th>
                  <th scope="col" class="px-6 py-4">DAYS</th>
                  <th scope="col" class="px-6 py-4">FEE</th>
                  <th scope="col" class="px-6 py-4">DATE</th>
                  <th scope="col" class="px-6 py-4">ACTION</th>
                </tr>
                @php
                  $currentModule = $course->module_id;
                @endphp
              @endif
                <tr class="border-b dark:border-neutral-500">
                  <td class="whitespace-nowrap px-6 py-4">{{ $course->code }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $course->name }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ $course->day }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ number_format($course->fee) }}</td>
                  <td class="whitespace-nowrap px-6 py-4">{{ \Carbon\Carbon::parse($course->date)->format('d-M-Y') }}</td>
                  <td class="whitespace-nowrap px-6 py-4">
                    <a href="{{ url('/reserveday', ['course_id' => $course->id]) }}" class="p-3 bg-green-600 text-white rounded-xl">จองเวลา</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            @else
              <tr>
                <td colspan="6" class="whitespace-nowrap px-6 py-4 font-medium hover:bg-yellow-100 text-center">No data</td>
              </tr>
            @endif
          @endisset
        </tbody>
      </table>
    </div>
  </div>
@endsection
