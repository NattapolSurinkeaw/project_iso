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



use App\Http\Controllers\Frontend\api\ApiDashboradController;
use App\Http\Controllers\Backend\api\ApiBackendController;

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
  Route::get('/', [Controller::class, 'homePage'])->name('home');
  Route::get('/register', [Controller::class, 'registerPage'])->name('register');
  Route::get('/login', [Controller::class, 'loginPage'])->name('login'); // เปลี่ยน YourLoginController เป็นชื่อ Controller ของคุณ

  Route::get('/contact',[FrontendController::class,'contactPage']);
  Route::get('/training',[TrainingController::class,'tainingPage']);

  Route::get('/testmail',[TrainingController::class,'testemail']);
  
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
  Route::get('/reserve_success',[TrainingController::class,'reserveSuccess']);

  Route::get('/dashboard',[DashboardController::class,'dashboard_user']);
  Route::get('/mycourse',[DashboardController::class,'myCourse']);
  Route::get('/purchasehistory',[DashboardController::class,'purchasePage']);
  Route::get('/purchasedetail/{id}',[DashboardController::class,'purchaseDetail']);
  Route::get('/reservationhistory',[DashboardController::class,'reservationPage']);
  Route::get('/reservedetail/{id}',[DashboardController::class,'reserveDetail']);
});  

Route::prefix('backend')->middleware('checkadmin')->group(function () { 
  Route::get('/',[BackendController::class,'homePage']);
  Route::get('/member',[MemberController::class,'backendMember']);
  Route::get('/coruse',[CourseController::class,'backendCourse']);
  Route::get('/coursedetail/{id}',[CourseController::class,'detailCourse']);
  Route::get('/question-table/{id}',[CourseController::class,'allQuestionTable']);

  Route::get('/training',[BackendTrainingController::class,'backendTraining']);
  Route::get('/createtraining',[BackendTrainingController::class,'createTraining']);
  Route::get('/edittraining/{id}',[BackendTrainingController::class,'editTraining']);

  Route::get('/newsevent',[BackendNewsEventController::class,'backendNewsEvent']);
  Route::get('/createnews',[BackendNewsEventController::class,'backendCreateNews']);
  Route::get('/editnews/{id}',[BackendNewsEventController::class,'backendEditNews']);

  Route::get('/pendingcourse',[PendingCourseController::class,'pendingCourse']);
  Route::get('/pendingcourse-detail/{id}',[PendingCourseController::class,'pendingCourseDetail']);
  Route::get('/pendingtraining',[PendingTrainingController::class,'pendingTraining']);
});


// Route::get('/home', [FrontendController::class, 'index']);
// Route::get('/sendmail',[Controller::class,'sendEmail']);
Route::get('/sendmail/{email}/{id}',[TrainingController::class,'sendEmail']);
Route::get('/emailform',[FrontendController::class, 'emailForm']);



Route::prefix('api')->group(function (){
  Route::post('/auth/login', [BackendController::class, 'onLogin']);
  Route::get('/auth/logout', [BackendController::class, 'onLogout'])->name('logout');

  Route::post('/auth/register', [BackendController::class, 'onRegister']);
  // Route::post('/auth/login', [BackendController::class, 'onLogin']);
  // Route::get('/auth/logout', [BackendController::class, 'onLogout'])->name('logout');

  Route::get('/getvideo/{id}', [ApiDashboradController::class, 'getHomeVideo']);
  Route::post('/dashboard/edituser/{id}', [ApiDashboradController::class, 'editUser']);

  Route::get('/auth/adminData', [BackendController::class, 'onGetAdminData']);
  Route::get('/auth/userData', [BackendController::class, 'onGetUserData']);
  Route::get('/courses',[BackendController::class, 'getAllCourse']);
  Route::get('/course/{id}', [ApiBackendController::class, 'getCourseById']);

  Route::post('/payment',[CartController::class, 'pendingPayment']);
  Route::get('/delallcart',[CartController::class, 'removeAllCart']);

  Route::post('/checkanswer/{id}',[QuestionController::class, 'checkAnswers']);

  Route::post('/reserve-training',[TrainingController::class, 'reservation']);


  //backend
  Route::post('/backend/course',[CourseController::class,'createCourse']);
  Route::post('/backend/editcourse/{id}',[CourseController::class,'editCourse']);
  
  Route::post('/backend/createquestion',[CourseController::class,'createQuestion']);
  Route::get('/backend/getquestion/{id}',[CourseController::class,'getQuestionById']);
  Route::put('/backend/editquestion/{id}',[CourseController::class,'editQuestion']);
  Route::delete('/backend/delquestion/{id}',[CourseController::class,'delQuestion']);

  Route::post('/backend/createannouce',[CourseController::class,'createAnnouce']);
  Route::get('/backend/getann/{id}',[CourseController::class,'getAnnouce']);
  Route::put('/backend/editann/{id}',[CourseController::class,'editAnnouncement']);
  Route::delete('/backend/delann/{id}',[CourseController::class,'deleteAnnouncement']);

  Route::post('/backend/creatematerial',[CourseController::class,'createMeterial']);

  Route::get('/backend/quiz/{id}',[CourseController::class,'getQuiz']);
  Route::post('/backend/createquiz',[CourseController::class,'createQuiz']);
  Route::put('/backend/editquiz/{id}',[CourseController::class,'editQuiz']);
  Route::delete('/backend/delquiz/{id}',[CourseController::class,'delQuiz']);

  Route::post('/backend/createnews',[BackendNewsEventController::class,'createNews']);
  Route::post('/backend/editnews/{id}',[BackendNewsEventController::class,'editNews']);
  Route::delete('/backend/delnews/{id}',[BackendNewsEventController::class,'deleteNews']);

  Route::get('/backend/module/{id}', [BackendTrainingController::class,'getModuleId']);
  Route::post('/backend/createmodule', [BackendTrainingController::class,'createModule']);
  Route::put('/backend/editmodule/{id}', [BackendTrainingController::class,'editModule']);
  Route::delete('/backend/delmodule/{id}', [BackendTrainingController::class,'delModule']);

  Route::post('/backend/createtrain', [BackendTrainingController::class,'cretaTraining']);
  Route::post('/backend/edittrain/{id}', [BackendTrainingController::class,'backend_editTraining']);
  Route::delete('/backend/deltrain/{id}', [BackendTrainingController::class,'delTraining']);

  Route::post('/backend/approvecourse/{id}', [PendingCourseController::class,'approvePendindCourse']);

});