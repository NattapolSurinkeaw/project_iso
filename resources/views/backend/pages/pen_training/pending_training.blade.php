@extends('backend.layouts.main')
@section('title') Pending IN-HOUSE @endsection
@section('container')

<div class="overflow-hidden">
    <h1 class="my-4 text-center text-2xl font-medium">Pending IN-HOUSE</h1>
    <div id="table-train" class="h-[750px] max-2xl:w-[75%] max-xl:w-[70%] overflow-y-scroll mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
              <tr>
                <th scope="col" class="px-6 py-3 rounded-tl-lg">
                  ลำดับ
                </th>
                <th scope="col" class="px-6 py-3">
                  <p>E-mail</p>
                </th>
                <th scope="col" class="px-6 py-3">
                  Company
                </th>
                <th scope="col" class="px-6 py-3">
                  Course
                </th>
                <th scope="col" class="px-6 py-3">
                  Name
                </th>
                <th scope="col" class="px-6 py-3">
                  status
                </th>
                <th scope="col" class="px-6 py-3">
                  reading
                </th>
                <th scope="col" class="px-6 py-3">
                  <p class="w-20">วันที่จองอบรม</p>
                </th>
                <th scope="col" class="px-6 py-3">
                  <p class="w-20">วันที่ตอบกลับ</p>
                </th>
                <th scope="col" class="px-6 py-3 rounded-tr-lg">
                  actions
                </th>
              </tr>
          </thead>
          <tbody>
            @php 
              $i = 1;
            @endphp
            @foreach ($pendingtraining as $pending)
              <tr class="bg-white dark:bg-gray-800 border-b-2">
                <th scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                  {{ $i++ }}
                </th>
                <td class="px-6 py-4">
                  <p>{{$pending->email}}</p>
                </td>
                <td class="px-6 py-4">
                  {{ $pending->company }}
                </td>
                <td class="px-6 py-4">
                  <p class="w-32">{{ $pending->training_reserve }}</p>
                </td>
                <td class="px-6 py-4">
                  {{ $pending->reserve_name }}
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
                    @if($pending->reading === "yes")
                      <p class="font-bold text-green-600">อ่านแล้ว</p>
                    @else
                      <p class="font-bold text-yellow-600">ยังไม่อ่าน</p>
                    @endif
                </td>
                <td class="px-6 py-4">
                  <p class="w-20">{{ $pending->created_at->format('d-M-y') }}</p>
                </td>
                <td class="px-6 py-4">
                  @if (!empty($pending->updated_at))
                    <p class="w-20">{{ $pending->updated_at->format('d-M-y') }}</p>
                  @else
                    null
                  @endif
                </td>
                <td class="px-6 py-4">
                  <div class="w-24"><a class="bg-blue-600 p-2 rounded-lg text-white w-24 text-center" href="{{url('/backend/pendingtraining-detail/'.$pending->id)}}">ลายละเอียด</a></div>
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


</script>

@endsection