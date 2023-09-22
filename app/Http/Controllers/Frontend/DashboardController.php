<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BillingTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MyCourse;
use App\Models\Elerningcourse;
use App\Models\PendingCourse;
use App\Models\PendingTraining;

class DashboardController extends Controller
{
    //
    public function dashboard_user() {
        $user = Auth::user();
        $user_id = $user->id;

        $elerningcourses = Elerningcourse::whereIn('id', function ($query) use ($user_id) {
            $query->select('elerningcourse_id')
                ->from('my_courses')
                ->where('user_id', $user_id);
        })->get();
        // dd($elerningcourses);
        return view('pages.app_dashboard.dashboard', compact('elerningcourses'));
    }

    public function myCourse() {
        $user = Auth::user();
        $user_id = $user->id;

        // $elerningcourses = Elerningcourse::whereIn('id', function ($query) use ($user_id) {
        //     $query->select('elerningcourse_id')
        //         ->from('my_courses')
        //         ->where('user_id', $user_id);
        // })->get();
        $elerningcourses = Elerningcourse::join('my_courses', 'elerningcourses.id', '=', 'my_courses.elerningcourse_id')
        ->where('my_courses.user_id', $user_id)
        ->select('elerningcourses.*')
        ->get();
        // dd($elerningcourses);

        return view('pages.app_dashboard.mycourse', compact('elerningcourses'));
    }

    public function purchasePage() {
        $user = Auth::user()->id;
        $pendingCourses = PendingCourse::where('user_id', $user)->get();
        
        $courses = Elerningcourse::all();
        return view('pages.app_dashboard.purchase_history', compact('pendingCourses', 'courses'));
    }

    public function purchaseDetail($pen_id) {
        $pendingCourse = PendingCourse::find($pen_id);
    
        $totalCoursesData = explode(',', $pendingCourse->total_courses);
    
        $courses = [];
        foreach ($totalCoursesData as $courseId) {
            $course = Elerningcourse::find($courseId);
            if ($course) {
                $courses[] = $course;
            }
        }
        return view('pages.app_dashboard.purchase_detail', compact('pendingCourse', 'courses'));
    }
    
    public function reservationPage() {
        $user = Auth::user()->id;
        $pendig_train = PendingTraining::where('user_id', $user)->get();
        // dd($pendig_train);exit();
        return view('pages.app_dashboard.reservation_history', compact('pendig_train'));
    }

    public function reserveDetail($pen_id) {
        // $reservetrain = PendingTraining::with('');
        $pendingTraining = PendingTraining::with('otherTrainings', 'billingTo')->find($pen_id);
        // dd($pendingTraining);exit();
        return view('pages.app_dashboard.reserve_detail', compact('pendingTraining'));
    }
}
