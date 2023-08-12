<?php

namespace App\Http\Controllers\Frontend\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiDashboradController extends Controller
{
    //
    public function editUser(Request $request, $user_id) {
        // ดึงข้อมูลจาก $request
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $imgInp = $request->file('imgInp'); // เรียกใช้ file() สำหรับการอัพโหลดไฟล์
    
        // ตรวจสอบว่ามีการอัพโหลดรูปภาพหรือไม่
        if ($imgInp) {
            // ทำการบันทึกไฟล์รูปภาพไว้ในโฟลเดอร์ที่คุณต้องการ
            $imagePath = $imgInp->store('images', 'public');
    
            // บันทึกข้อมูลในฐานข้อมูลพร้อมรูปภาพ
            $user = User::find($user_id);
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->img_profile = $imagePath; // บันทึกรูปภาพ
    
            $user->save();
    
            return response([
                'status' => 200,
                'message' => 'success'
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
                'message' => 'success'
            ], 200);
        }
    }
}
