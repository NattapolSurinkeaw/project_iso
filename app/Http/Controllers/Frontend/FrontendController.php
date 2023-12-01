<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LeaveMessage;

class FrontendController extends Controller
{
    public function contactPage() {
        return view('pages.app_iso.contact');
    }

    public function sendMessage(Request $request) {
        $request->validate([
            'fname_lname' => 'required',
            'phone_number' => 'required',
            'organiz' => 'required',
            'email' => 'required',
            'leave_message' => 'required',
        ]);

        $leavemessage = new LeaveMessage;
        $leavemessage->fname_lname = $request->input('fname_lname');
        $leavemessage->phone_number = $request->input('phone_number');
        $leavemessage->organiz = $request->input('organiz');
        $leavemessage->email = $request->input('email');
        $leavemessage->leave_message = $request->input('leave_message');
        $leavemessage->save();

        return response()->json([
            'status' => 'success',
            'message' => 'send message success'
        ], 200);
    }

    public function emailForm() {
        return view('emails.welcome');
    }


}
