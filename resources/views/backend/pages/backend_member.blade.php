@extends('backend.layouts.main')
@section('title') Member @endsection
@section('container')

<div class="">
    <h1>Member</h1>
    @foreach($users as $user)
    <ul>
        <li>{{$user->name}} {{$user->email}}</li>
    </ul>
    @endforeach
</div>

@endsection

@section('be-scripts')
<script>
    console.log("ffdff")

</script>

@endsection