<?php

namespace App\Http\Controllers\Frontend\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Str;

class ApiDashboradController extends Controller
{
    //
    public function editUser(Request $request, $user_id) {
        // ดึงข้อมูลจาก $request
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $imgInp = $request->file('imgInp'); // เรียกใช้ file() สำหรับการอัพโหลดไฟล์
    
        
        if ($request->hasFile('imgInp')) {
            // ทำการบันทึกไฟล์รูปภาพไว้ในโฟลเดอร์ที่คุณต้องการ
            $imageName = Str::random() . '.' . $request->imgInp->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('upload/profile', $request->imgInp, $imageName);
        
            // บันทึกข้อมูลในฐานข้อมูลพร้อมรูปภาพ
            $user = User::find($user_id);
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->img_profile = $imageName; // บันทึกรูปภาพ
        
            $user->save();
        
            return response([
                'status' => 200,
                'data' => $user
            ], 200);
        } else {
            // กรณีไม่มีการอัพโหลดรูปภาพ
            $user = User::find($user_id);
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
        
            $user->save();
        
            return response([
                'status' => 200,
                'message' => 'do else',
                'imgInp' => $request->file('imgInp')
            ], 200);
        }
    }
    
}
