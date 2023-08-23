<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use stdClass;
use App\Models\Course;

class BackendController extends Controller
{
    use HasApiTokens;
    
    public function onRegister(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required' // เพิ่มกฎการตรวจสอบให้ตรงกับฐานข้อมูล
        ]);

        if ($validator->fails()) {
            return response([
                'message' => 'error',
                'errorMessage' => $validator->errors()
            ]);
        }

        $createUser = new User();
        if ($createUser) {
            $createUser->email = $request->email;
            $createUser->password = Hash::make($request->password);
            $createUser->name = $request->name; // เพิ่มการกำหนดค่าฟิลด์ 'name'
            $createUser->save();
            return response([
                'message' => 'ok',
                'description' => 'Create User Success',
            ], 201);
        } else {
            return response([
                'message' => 'error',
                'description' => 'Register Error'
            ], 400);
        }
    }

    public function onGetAdminData() {
        try {
            $user = User::where("email", Auth::user()->email)->first();
            $user->name = "admin";
            $user->save();

            return response([
                'message' => 'ok',
                'description' => 'get admin data success'
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'errorMessage' => $e
            ], 500);
        }
    }

    public function onGetUserData() {
        try {
            $user = User::wherie("email", Auth::user()->emal)->first();
            $user->name = "user";
            $user->save();

            return response([
                'message' => 'ok',
                'description' => 'get user data success'
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'server error',
                'errorMessage' => $e
            ], 500);
        }
    }

    public function onLogin(Request $request) {
        try {
            $data = [
                'email' => $request->email,
                'password' => $request->password
            ];
    
            if (Auth::attempt($data)) {
                $user = Auth::user();
                $user->tokens()->delete();
                
                // สร้าง Abilities จาก role
                $abilities = [$user->role];
                
                $token = $user->createToken($data['email'], $abilities);
                $accessToken = $token->plainTextToken;
    
                return response([
                    'message' => 'ok',
                    'description' => 'Login Success',
                    'access_token' => $accessToken,
                    'data' => Auth::user()
                ]);
            } else {
                return response([
                    'message' => 'error',
                    'description' => 'Login Error'
                ], 401);
            }
        } catch (Exception $e) {
            return response([
                "message" => "error",
                "description" => "Something went wrong.",
                "errorMessage" => $e
            ], 500);
        }
    }
    
    public function onLogout() {
        try {
            if (Auth::check()) {
                $user = Auth::user();
                $user->tokens()->delete();
            }

            Auth::logout();

            return response([
                'message' => 'ok',
                'description' => 'Logout Success.'
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.',
                'errorMessage' => $e
            ]);
        }
    }

    public function getAllCourse() {
        $courses = Course::all();

        if($courses === null) {
            return response([
                'message' => 'error',
                'description' => 'Something went wrong.'
            ], 404);
        }

        return response([
           'message' => 'ok',
            'data' => $courses
        ]);
    }


    //เรียก Page
    public function homePage() {
        return view('backend.pages.home');
    }
}
