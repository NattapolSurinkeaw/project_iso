<nav class="h-full flex flex-col justify-between p-4 overflow-y-auto">
    <div class="w-full max-2xl:w-52">
        <a href="/backend/"><img src="/image/icon/isologo.png"></a>
        <h1 class="my-4 text-white font-medium text-xl">MAIN CONTENT</h1>
        <ul class="flex flex-col items-center gap-4">
            <a href="/backend/"><li>HOME</li></a>
            <a href="/backend/member"><li>MEMBER</li>                 
            <a href="/backend/coruse"><li>ELEARNING</li></a>
            <a href="/backend/training"><li>IN-HOUSE</li></a>
            <a href="/backend/newsevent"><li>NEWS AND EVENT</li></a>
        </ul>

        <h1 class="my-4 text-white font-medium text-xl">PENDING APPROVAL</h1>
        <ul class="flex flex-col items-center gap-4">
            <a href="/backend/pendingcourse"><li>ELEARNING</li></a>
            <a href="/backend/pendingtraining"><li>IN-HOUSE</li></a>
        </ul>

        <h1 class="my-4 text-white font-medium text-xl">WEB CONTENT</h1>
        <ul class="flex flex-col items-center gap-4">
            <a href="/backend/webcontent"><li>HOME</li></a>
        </ul>
        <a href="{{url('/backend/leavemessage')}}"><h1 class="my-4 text-white font-medium text-xl">Contact Message</h1></a>
        <a href="{{url('/backend/managediscount')}}"><h1 class="my-4 text-white font-medium text-xl">โค้ดส่วนลด</h1></a>
        <a href="/image/manual.pdf" target="_bank"><h1 class="my-4 text-white font-medium text-xl">คู่มือ</h1></a>
    </div>
    <div class="flex flex-col gap-4">
        <a href="/" class="bg-blue-500 p-3 text-center rounded-lg text-lg text-white">User View</a>
        <button  id="btnLogout" class="bg-red-500 p-3 rounded-lg text-lg text-white">Logout</button>
    </div>
</nav>
