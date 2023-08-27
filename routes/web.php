<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ElerningController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\NewsAndEventController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\QuizController;
use App\Http\Controllers\Frontend\QuestionController;

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\BackendTrainingController;
use App\Http\Controllers\Backend\BackendNewsEventController;
use App\Http\Controllers\Backend\PendingCourseController;
use App\Http\Controllers\Backend\PendingTrainingController;

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
  Route::get('/register', [Controller::class, 'registerPage'])->name('register');
  Route::get('/login', [Controller::class, 'loginPage'])->name('login'); // เปลี่ยน YourLoginController เป็นชื่อ Controller ของคุณ


  Route::get('/contact',[FrontendController::class,'contactPage']);

  Route::get('/training',[TrainingController::class,'tainingPage']);
  

  Route::get('/newsandevent',[NewsAndEventController::class,'newsAndEventPage']);
  Route::get('/newsdetails/{id}',[NewsAndEventController::class,'newsDetail']);
  
  Route::get('/elerning',[ElerningController::class,'elerningPage']);
  Route::get('/course/{id}',[ElerningController::class,'coursePage'])->middleware('checklogin');
  Route::get('/coursedetail/{id}',[ElerningController::class,'courseDetail']);
  
  Route::get('/quizstart/{course_id}/{quiz_id}',[QuizController::class,'quizStart'])->middleware('checklogin');
  Route::get('/all_question/{id}',[QuestionController::class,'all_question'])->middleware('checklogin');
  Route::get('/scoresumary/{id}',[QuizController::class,'score_sumary'])->middleware('checklogin');

  Route::get('/cart',[CartController::class,'cartPage'])->middleware('checklogin');
  Route::get('/payment',[CartController::class,'paymentForm'])->middleware('checklogin');
  Route::post('/add-to-cart',[CartController::class,'addToCart'])->middleware('checklogin');
  Route::post('/remove-cart',[CartController::class,'removeCart'])->middleware('checklogin');

  

Route::middleware('checklogin')->group(function () { 
  Route::get('/reserveday/{course_id}',[TrainingController::class,'calendarReserve']);
  Route::get('/trainingform',[TrainingController::class,'trainingForm']);
  Route::get('/reserve_success',[TrainingController::class,'reservation']);

  Route::get('/dashboard',[DashboardController::class,'dashboard_user']);
  Route::get('/mycourse',[DashboardController::class,'myCourse']);
  Route::get('/purchasehistory',[DashboardController::class,'purchasePage']);
  Route::get('/reservationhistory',[DashboardController::class,'reservationPage']);
});  
// });
Route::prefix('backend')->middleware('checklogin')->group(function () { 
  Route::get('/',[BackendController::class,'homePage']);
  Route::get('/member',[MemberController::class,'backendMember']);
  Route::get('/coruse',[CourseController::class,'backendCourse']);
  Route::get('/coursedetail/{id}',[CourseController::class,'detailCourse']);
  Route::get('/training',[BackendTrainingController::class,'backendTraining']);
  Route::get('/newsevent',[BackendNewsEventController::class,'backendNewsEvent']);
  Route::get('/pendingcourse',[PendingCourseController::class,'pendingCourse']);
  Route::get('/pendingtraining',[PendingTrainingController::class,'pendingTraining']);
});


// Route::get('/home', [FrontendController::class, 'index']);
// Route::get('/sendmail',[Controller::class,'sendEmail']);
Route::get('/sendmail/{email}',[TrainingController::class,'sendEmail']);
Route::get('/emailform',[FrontendController::class, 'emailForm']);