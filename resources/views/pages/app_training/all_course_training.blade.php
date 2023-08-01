@extends('layouts.main')
@section('title') Alltraning @endsection
@section('content')
  <div class="w-11/12 m-auto px-8 pt-20 h-screen overflow-hidden">
    <h1 class="text-3xl text-center">All course</h1>
    <div class="flex flex-col w-full">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 overflow-auto">
          <div class="overflow-hidden">
            <table class="min-w-full text-left text-sm font-light">
              <thead class="border-b font-medium dark:border-neutral-500">
                <tr>
                  <th scope="col" class="px-6 py-4">CODE</th>
                  <th scope="col" class="px-6 py-4">COURSE</th>
                  <th scope="col" class="px-6 py-4">DAYS</th>
                  <th scope="col" class="px-6 py-4">FEE</th>
                  <th scope="col" class="px-6 py-4">DATE</th>
                  <th scope="col" class="px-6 py-4">ACTION</th>
                </tr>
              </thead>
              <tbody>
                @isset($courses)
                  @if(count($courses) > 0)
                    @foreach($courses as $course)
                      <tr class="border-b dark:border-neutral-500">
                        <td class="whitespace-nowrap px-6 py-4">{{$course->code}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$course->name}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$course->day}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ number_format($course->fee) }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$course->date}}</td>
                        <td class="whitespace-nowrap px-6 py-4">
                          <a href="/trainingform" class="p-3 bg-green-600 text-white rounded-xl">สมัคร</a>
                        </td>
                      </tr>
                    @endforeach
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
      </div>
    </div>
  </div>
@endsection
