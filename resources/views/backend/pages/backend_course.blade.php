@extends('backend.layouts.main')
@section('title') Course @endsection
@section('container')

<div class="">
    <h1>Course</h1>
    @foreach($courses as $course)
    <ul>
        <li>{{$course->id}} {{$course->course_name}} {{$course->price}} {{$course->description}} {{$course->img_course}}</li>
        <hr>
    </ul>
    @endforeach
</div>

@endsection

@section('be-scripts')
<script>
    console.log("ffdff")

</script>

@endsection