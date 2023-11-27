<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LeaveMessage;

class LeaveMessageController extends Controller
{
    //
    public function manage_leavemessage() {
        $message = LeaveMessage::all();
        return view('backend.pages.leave_message.manage_leavemessage', compact('message'));
    }

    public function getMessageById($id) {
        $message = LeaveMessage::find($id);
        if(!$message) {
            return response()->json([
                'status' => 'error',
                'message' => 'Leave message not found'
            ], 404);
        } else {
            return response()->json([
                'status' => 'success',
                'data' => $message
            ], 200);
        }
    }
}
