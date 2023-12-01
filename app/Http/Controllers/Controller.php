<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\HomeVideo;
use App\Models\NewsEvent;
use App\Models\HomeDocument;
use App\Models\BannerImage;
use App\Models\Elerningcourse;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function homePage() {
        $banners = BannerImage::all();
        $homeVideos = HomeVideo::select('id', 'thumbnail')->take(5)->get();
        $homeNews = NewsEvent::orderBy('created_at', 'desc')->take(5)->get();
        $elearnings = Elerningcourse::take(4)->get();
        $homeDocuments = HomeDocument::all();

        return view('pages.app_iso.home', compact('banners', 'homeVideos', 'homeNews', 'homeDocuments','elearnings'));
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

    

}
