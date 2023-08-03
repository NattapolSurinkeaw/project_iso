<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[Controller::class,'homePage']);
// Route::get('/register', [Controller::class,'registerPage']);
// Route::get('/login',[Controller::class,'loginPage']);
// Route::middleware('web')->group(function () {
  Route::get('/', [Controller::class, 'homePage']);
  Route::get('/register', [Controller::class, 'registerPage']);
  Route::get('/login', [Controller::class, 'loginPage']);

  Route::get('/elerning',[FrontendController::class,'elerningPage']);
  Route::get('/training',[FrontendController::class,'tainingPage']);
  Route::get('/trainingform',[FrontendController::class,'trainingForm']);
  Route::get('/newsandevent',[FrontendController::class,'newsAndEventPage']);
  Route::get('/newsdetails',[FrontendController::class,'newsDetail']);
  Route::get('/contact',[FrontendController::class,'contactPage']);
  Route::get('/elerning',[FrontendController::class,'elerningPage']);
  Route::get('/course',[FrontendController::class,'coursePage']);
  Route::get('/coursedetail',[FrontendController::class,'courseDetail']);
  Route::get('/quiz',[FrontendController::class,'startQuiz']);
  Route::get('/allquiz',[FrontendController::class,'all_quiz']);
  Route::get('/scoresumary',[FrontendController::class,'score_sumary']);
  Route::get('/cart',[FrontendController::class,'cartPage']);
  Route::get('/payment',[FrontendController::class,'paymentForm']);

  Route::get('/dashboard',[DashboardController::class,'dashboard_user']);
  Route::get('/profile',[DashboardController::class,'profile']);

// });




// Route::get('/home', [FrontendController::class, 'index']);
Route::get('/sendmail',[Controller::class,'sendEmail']);
Route::get('/emailform',[FrontendController::class, 'emailForm']);