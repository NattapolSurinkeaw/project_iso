<?php

namespace App\Http\Controllers\Frontend\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\HomeVideo;

use Illuminate\Support\Str;

class ApiDashboradController extends Controller
{
    //
    public function getHomeVideo(Request $request, $id) {
        $display = $request->input('display');

        $width = null;
        $height = null;
        if($display == '2xl') {
            $width = 1450;
            $height = 768;
        } elseif($display == 'xl') {
            $width = 1000;
            $height = 500;
        } elseif($display == 'lg') {
            $width = 768;
            $height = 400;
        } elseif($display == 'md') {
            $width = 640;
            $height = 400;
        } elseif($display == 'xs') {
            $width = 375;
            $height = 300;
        }
        $urlvdo = HomeVideo::find($id);
  
        if($urlvdo->type_input == 'youtube' || $urlvdo->type_input == 'vimeo'){
            $embed = \Embed::make($urlvdo->url)->parseUrl();
            $embed->setAttribute('width', $width);  // กำหนดค่า width
            $embed->setAttribute('height', $height); // กำหนดค่า height
            $course_video = $embed->getHtml();
        } else if ($urlvdo->type_input == 'drive') {
            $course_video = '<iframe src="' . $urlvdo->url . '" width="'.$width.'" height="'.$height.'" allow="autoplay"></iframe>';
        } else {
            $course_video = "ไม่มีวิดีโอ";
        }

        if (empty($urlvdo)) {
            return response([
               "status" => "404",
               "message" => "Data Not Found", 
            ], 404);
        } else {
            return response([
               "status" => "200",
               "data" => $course_video, 
            ], 200);
        }
    }

    public function editUser(Request $request, $user_id) {
        // dd($request->all());exit();
        $user = User::find($user_id);
        
        if(!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'not found news'
            ], 400);
        }

        $request->validate([
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

        $user->name = $request->input('name');

        if ($request->hasFile('profile') && $request->file('profile')->isValid()) {
            $image = $request->file('profile');
            $imgName = '/upload/images/profile/' . time() . '.' . $image->getClientOriginalExtension();

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
