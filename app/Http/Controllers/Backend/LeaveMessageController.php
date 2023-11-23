<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveMessageController extends Controller
{
    //
    public function manage_leavemessage() {
        return view('backend.pages.leave_message.manage_leavemessage');
    }
}
