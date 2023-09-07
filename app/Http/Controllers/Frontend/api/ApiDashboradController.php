<?php

namespace App\Http\Controllers\Frontend\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
