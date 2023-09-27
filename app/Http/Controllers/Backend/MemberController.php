<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //
    public function backendMember() {
        $users = User::all();
        return view('backend.pages.member.backend_member', compact('users'));
    }

    public function memberDetail($user_id) {
        $userdata = User::find($user_id); 
        return view('backend.pages.member.backend_memberdetail', compact('userdata'));
    }
}
