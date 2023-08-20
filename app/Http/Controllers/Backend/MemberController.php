<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    //
    public function backendMember() {
        $users = User::all();
        return view('backend.pages.backend_member', compact('users'));
    }
}
