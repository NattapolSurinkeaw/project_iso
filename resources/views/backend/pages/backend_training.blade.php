@extends('backend.layouts.main')
@section('title') Training @endsection
@section('container')

<div class="overflow-hidden">
    <h1 class="text-center text-2xl font-bold">Training</h1>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
    {{$trainingcourse}}
</div>

@endsection

@section('be-scripts')
<script>


</script>

@endsection