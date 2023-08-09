<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ElerningController;
use App\Http\Controllers\Frontend\NewsAndEventController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\QuizController;

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

  Route::get('/contact',[FrontendController::class,'contactPage']);

  Route::get('/training',[TrainingController::class,'tainingPage']);
  Route::get('/reserveday/{course_id}',[TrainingController::class,'calendarReserve']);
  Route::get('/trainingform',[TrainingController::class,'trainingForm']);

  Route::get('/newsandevent',[NewsAndEventController::class,'newsAndEventPage']);
  Route::get('/newsdetails/{id}',[NewsAndEventController::class,'newsDetail']);
  
  Route::get('/elerning',[ElerningController::class,'elerningPage']);
  Route::get('/course/{id}',[ElerningController::class,'coursePage']);
  Route::get('/coursedetail/{id}',[ElerningController::class,'courseDetail']);
  
  Route::get('/quiz/{id}',[QuizController::class,'quizPage']);
  Route::get('/allquiz/{id}',[QuizController::class,'all_quiz']);
  Route::get('/scoresumary',[QuizController::class,'score_sumary']);

  Route::get('/cart',[FrontendController::class,'cartPage']);
  Route::get('/payment',[FrontendController::class,'paymentForm']);

  Route::get('/dashboard',[DashboardController::class,'dashboard_user']);
  Route::get('/profile',[DashboardController::class,'profile']);

// });




// Route::get('/home', [FrontendController::class, 'index']);
Route::get('/sendmail',[Controller::class,'sendEmail']);
Route::get('/emailform',[FrontendController::class, 'emailForm']);