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
        return view('pages.app_dashboard.mycourse');
    }

    public function purchasePage() {
        $user = Auth::user();
        dd($user->id);exit();
        $pendingcourse = PendingCourse::all();
        return view('pages.app_dashboard.purchase_history');
    }

    public function reservationPage() {

        return view('pages.app_dashboard.reservation_history');
    }

}
