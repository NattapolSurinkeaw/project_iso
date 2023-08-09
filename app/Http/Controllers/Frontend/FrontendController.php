<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //
    // public function index() {

    //     $user = Auth::user();
    //     return view('layouts.main', [
    //         'user' => $user
    //     ]);
    // }

    public function contactPage() {
        return view('pages.app_iso.contact');
    }

    public function emailForm() {
        return view('emails.welcome');
    }

    public function cartPage() {
        return view('pages.app_cart.cart');
    }

    public function paymentForm() {
        return view('pages.app_cart.paymentform');
    }

}
