<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\MyCourse;

class MemberController extends Controller
{
    //
    public function backendMember() {
        $users = User::all();
        return view('backend.pages.member.backend_member', compact('users'));
    }

    public function memberDetail($user_id) {
        $userdata = User::find($user_id); 
        $mycourses = MyCourse::with('Elerningcourse')
        ->where('user_id', $user_id)
        ->get();
        return view('backend.pages.member.backend_memberdetail', compact('userdata', 'mycourses'));
    }

    public function editMember(Request $request, $user_id) {
        $user = User::find($user_id);
        
        if(!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'not found news'
            ], 400);
        }

        $request->validate([
            'email' => 'required',
            'name' => 'required',
        ]);

        $oldpass = $request->input('old-password');
        $newpass = $request->input('password');

        if (!is_null($oldpass) && !is_null($newpass)) {
            if (Hash::check($oldpass, $user->password)) {
                $user->password = Hash::make($newpass);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Password is incorrect'
                ], 400);
            }
        }

        $user->email = $request->input('email');
        $user->name = $request->input('name');

        if ($request->hasFile('profile') && $request->file('profile')->isValid()) {
            $image = $request->file('profile');
            $imgName = '/upload/images/profile/' . time() . '.' . $image->getClientOriginalExtension();

            // ตรวจสอบว่ามีรูปเก่าใน $user->img_profile หรือไม่
            if (!empty($user->img_profile)) {
                // ถ้ามีรูปเก่า ให้ลบไฟล์เก่าที่อยู่ใน $user->img_profile
                File::delete(public_path($user->img_profile));
            }

            $image->move(public_path('upload/images/profile'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
            $user->img_profile = $imgName;
        }

        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'edit profile successfully'
        ], 200);
    }
}
