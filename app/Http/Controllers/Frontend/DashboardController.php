<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MyCourse;
use App\Models\Elerningcourse;
use App\Models\PendingCourse;


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
        $user = Auth::user();
        $pendingCourses = PendingCourse::where('user_id', $user->id)->get();
        
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

        return view('pages.app_dashboard.reservation_history');
    }

}
