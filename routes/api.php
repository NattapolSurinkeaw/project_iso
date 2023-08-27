<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\api\ApiDashboradController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\api\ApiBackendController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register', [BackendController::class, 'onRegister']);
Route::post('/auth/login', [BackendController::class, 'onLogin']);
Route::get('/auth/logout', [BackendController::class, 'onLogout'])->name('logout');

Route::get('/getvideo/{id}', [ApiDashboradController::class, 'getHomeVideo']);
Route::put('/dashboard/edituser/{id}', [ApiDashboradController::class, 'editUser']);

Route::get('/auth/adminData', [BackendController::class, 'onGetAdminData']);
Route::get('/auth/userData', [BackendController::class, 'onGetUserData']);
Route::get('/courses',[BackendController::class, 'getAllCourse']);
Route::get('/course/{id}', [ApiBackendController::class, 'getCourseById']);


//backend
Route::post('/backend/course',[CourseController::class,'createCourse']);