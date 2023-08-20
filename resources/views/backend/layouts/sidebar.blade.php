<nav class="h-full flex flex-col justify-between p-4">
    <div class="">
        <a href="/backend/"><img src="/image/icon/isologo.png"></a>
        <h1 class="my-4 text-white font-bold text-xl">main content</h1>
        <ul class="flex flex-col items-center gap-4">
            <a href="/backend/member"><li>MEMBER</li></a>
            <li>Course</li>
            <li>Training</li>
            <li>News And Event</li>
            <li>HOME</li>
        </ul>

        <h1 class="my-4 text-white font-bold text-xl">pending approval</h1>
        <ul class="flex flex-col items-center gap-4">
            <li>Course</li>
            <li>Training</li>
        </ul>
    </div>
    <div class="flex flex-col gap-4">
        <a href="/" class="bg-blue-500 p-3 text-center rounded-lg text-lg text-white">User View</a>
        <button onclick="onLogout()" class="bg-red-500 p-3 rounded-lg text-lg text-white">Logout</button>
    </div>
</nav>

@section('be-scripts')
<script>

function onLogout() {
    axios.get('/api/auth/logout').then((response) => {
        console.log(response);
        location.href ='/login';
    });
}

</script>
@endsection