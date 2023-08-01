<?php

use App\Http\Controllers\Backend\BackendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/auth/logout', [BackendController::class, 'onLogout']);

Route::get('/auth/adminData', [BackendController::class, 'onGetAdminData']);
Route::get('/auth/userData', [BackendController::class, 'onGetUserData']);
Route::get('/courses',[BackendController::class, 'getAllCourse']);
