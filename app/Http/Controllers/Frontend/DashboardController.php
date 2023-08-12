<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard_user() {
        return view('pages.app_dashboard.dashboard');
    }

    public function profile() {
        return view('pages.app_dashboard.profile');
    }

    public function myCourse() {
        return view('pages.app_dashboard.mycourse');
    }

    public function purchasePage() {
        return view('pages.app_dashboard.purchase_history');
    }

    public function reservationPage() {
        return view('pages.app_dashboard.reservation_history');
    }

}
