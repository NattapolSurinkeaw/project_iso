<?php

namespace App\Http\Controllers\Frontend\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeVideo;

use Illuminate\Support\Str;

class ApiDashboradController extends Controller
{
    //
    public function getHomeVideo($id) {
        $urlvdo = HomeVideo::find($id);

        if (empty($urlvdo)) {
            return response([
               "status" => "404",
               "message" => "Data Not Found", 
            ], 404);
        } else {
            return response([
               "status" => "200",
               "data" => $urlvdo, 
            ], 200);
        }

    }

    public function editUser(Request $request, $user_id) {
        dd($request->all());exit();
        // ใช้ $request เพื่อเข้าถึงข้อมูลที่ถูกส่งมา
        // dd($data);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $profileFile = $request->file('profile'); // ใช้ file() เพื่อรับไฟล์
    
        // ตรวจสอบค่าข้อมูลที่ได้รับ

    // ดูข้อมูลในรูปแบบของ Array

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
