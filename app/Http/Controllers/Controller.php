<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function homePage() {
        $allSessions = session()->all();
        // dd($allSessions);
        return view('pages.app_iso.home', compact('allSessions'));
    }

    public function registerPage() {
        if (Auth::user()) {
            return redirect('/');
        }
        return view('pages.authen.register');
    }

    public function loginPage() {
        if (Auth::user()) {
            return redirect('/');
        }
        return view('pages.authen.login');
    }

    public function sendEmail()
    {
        Mail::to('nattapol.surinkeaw@gmail.com')->send(new WelcomeEmail());
    }

}
