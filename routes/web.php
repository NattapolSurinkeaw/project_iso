<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PDFController;
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

use App\Http\Controllers\Backend\WebContentController;
use App\Http\Controllers\Backend\LeaveMessageController;

use App\Http\Controllers\Frontend\api\ApiDashboradController;
use App\Http\Controllers\Backend\api\ApiBackendController;
use App\Http\Controllers\Backend\ManageDiscountController;

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
// Route::middleware('web')->group(function   () {
  Route::get('/certificate', [PDFController::class, 'generatepdf']);
  Route::get('/quotation/{id}', [PDFController::class, 'genarateQuotation']);
  Route::get('/formcer', [PDFController::class, 'formver']);

  Route::get('/', [Controller::class, 'homePage'])->name('home');
  Route::get('/register', [Controller::class, 'registerPage'])->name('register');
  Route::get('/login', [Controller::class, 'loginPage'])->name('login');

  Route::get('/contact',[FrontendController::class,'contactPage']);
  Route::get('/training/{id?}', [TrainingController::class, 'tainingPage']);
  Route::get('/detail-training/{id}', [TrainingController::class, 'trainingDetail']);

  Route::get('/testmail',[TrainingController::class,'testemail']);
  
  Route::get('/newsandevent',[NewsAndEventController::class,'newsAndEventPage']);
  Route::get('/newsdetails/{id}',[NewsAndEventController::class,'newsDetail']);
  
  Route::get('/elerning/{id?}',[ElerningController::class,'elerningPage']);
  Route::get('/course/{id}',[ElerningController::class,'coursePage'])->middleware('checklogin');
  Route::get('/coursedetail/{id}',[ElerningController::class,'courseDetail']);
  
  Route::get('/quizstart/{quiz_id}',[QuizController::class,'quizStart'])->middleware('checklogin');
  Route::get('/all_question/{id}',[QuestionController::class,'all_question'])->middleware('checklogin');
  Route::get('/scoresumary/{id}',[QuizController::class,'score_sumary'])->middleware('checklogin');

  Route::get('/cart',[CartController::class,'cartPage'])->middleware('checklogin');
  Route::get('/payment',[CartController::class,'paymentForm'])->middleware('checklogin');
  Route::post('/add-to-cart',[CartController::class,'addToCart'])->middleware('checklogin');
  Route::post('/remove-cart',[CartController::class,'removeCart'])->middleware('checklogin');
  
  Route::post('/apply-discount/{code}',[CartController::class,'applyDiscount'])->middleware('checklogin');

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
  // Route::get('/home', [FrontendController::class, 'index']);
  // Route::get('/sendmail',[Controller::class,'sendEmail']);
  Route::get('/sendmail/{email}/{id}',[TrainingController::class,'sendEmail']);
  Route::get('/emailform',[FrontendController::class, 'emailForm']);


Route::prefix('backend')->middleware('checkadmin')->group(function () { 
  Route::get('/',[BackendController::class,'homePage']);
  Route::get('/member',[MemberController::class,'backendMember']);
  Route::get('/memberdetail/{id}',[MemberController::class,'memberDetail']);
  Route::get('/coruse',[CourseController::class,'backendCourse']);
  Route::get('/createcoruse',[CourseController::class,'create_course_page']);
  Route::get('/coruse-member/{id}',[CourseController::class,'courseMemberPage']);
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
  Route::get('/pendingtraining-detail/{id}',[PendingTrainingController::class,'pendingTrainingDetail']);

  Route::get('/webcontent',[WebContentController::class,'contentHome']);
  Route::get('/leavemessage',[LeaveMessageController::class,'manage_leavemessage']);
  Route::get('/managediscount',[ManageDiscountController::class,'managediscount']);
});


Route::prefix('api')->group(function (){
  Route::post('/auth/login', [BackendController::class, 'onLogin']);
  Route::get('/auth/logout', [BackendController::class, 'onLogout'])->name('logout');
  Route::post('/auth/register', [BackendController::class, 'onRegister']);

  Route::post('/sendmessage', [FrontendController::class, 'sendMessage']);
  
  Route::get('/getvideomat/{id}', [ElerningController::class, 'getVideoMat']);
  Route::post('/learning-video/{id}', [ElerningController::class, 'learningvideo']);
  Route::post('/getvideo/{id}', [ApiDashboradController::class, 'getHomeVideo']);
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
  Route::post('/backend/editmember/{id}',[MemberController::class,'editMember']);
  Route::post('/backend/course',[CourseController::class,'createCourse']);
  Route::post('/backend/editcourse/{id}',[CourseController::class,'editCourse']);
  Route::delete('/backend/delcourse/{id}',[CourseController::class,'delCourse']);

  Route::post('/backend/createcate', [CourseController::class, 'createCate']);
  Route::delete('/backend/delcate/{id}', [CourseController::class, 'delCate']);
  Route::post('/backend/addcate/{id}', [CourseController::class, 'addCategory']);
  
  Route::post('/backend/createquestion',[CourseController::class,'createQuestion']);
  Route::get('/backend/getquestion/{id}',[CourseController::class,'getQuestionById']);
  Route::put('/backend/editquestion/{id}',[CourseController::class,'editQuestion']);
  Route::delete('/backend/delquestion/{id}',[CourseController::class,'delQuestion']);

  Route::post('/backend/createannouce',[CourseController::class,'createAnnouce']);
  Route::get('/backend/getann/{id}',[CourseController::class,'getAnnouce']);
  Route::put('/backend/editann/{id}',[CourseController::class,'editAnnouncement']);
  Route::delete('/backend/delann/{id}',[CourseController::class,'deleteAnnouncement']);

  Route::post('/backend/creatematerial',[CourseController::class,'createMeterial']);
  Route::get('/backend/material/{id}',[CourseController::class,'getMaterialById']);
  Route::post('/backend/editmaterial/{id}',[CourseController::class,'editMaterial']);
  Route::delete('/backend/delmaterial/{id}',[CourseController::class,'delMaterial']);

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

  Route::post('/backned/updatependingtrain/{id}', [PendingTrainingController::class,'updatePendingTrain']);

  Route::get('/backend/getvideo/{id}', [WebContentController::class, 'getVideo']);
  Route::post('/backend/editvideo/{id}', [WebContentController::class, 'editVideo']);

  Route::get('/backend/getdocument/{id}', [WebContentController::class, 'getDocument']);
  Route::post('/backend/editdocument/{id}', [WebContentController::class, 'editHomeDoc']);
  
  Route::get('/backend/banner/{id}', [WebContentController::class, 'get_banner_by_id']);
  Route::post('/backend/editbanner/{id}', [WebContentController::class, 'edit_banner']);

  Route::get('/backend/getmessage/{id}', [LeaveMessageController::class, 'getMessageById']);

  Route::get('/backend/getdiscount/{id}', [ManageDiscountController::class, 'getDiscount']);
  Route::post('/backend/creatediscount', [ManageDiscountController::class, 'create_discount']);
  Route::put('/backend/editdiscount/{id}', [ManageDiscountController::class, 'edit_discount']);
  Route::delete('/backend/deletediscount/{id}', [ManageDiscountController::class, 'delete_discount']);
});