<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function homePage() {
        return view('pages.app_iso.home');
    }

    public function registerPage() {
        return view('pages.authen.register');
    }

    public function loginPage() {
        return view('pages.authen.login');
    }

    public function sendEmail()
    {
        Mail::to('nattapol.surinkeaw@gmail.com')->send(new WelcomeEmail());
    }

}
