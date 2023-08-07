<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsEvent;

class NewsAndEventController extends Controller
{
    //
    public function newsAndEventPage() {
        $newsEvents = NewsEvent::all();
        return view('pages.app_NewsAndEvent.newsAndEvent', compact('newsEvents'));
    }

    public function newsDetail($id) {
        $getNews = NewsEvent::find($id);
        return view('pages.app_NewsAndEvent.newsDetail', compact('getNews'));
    }

}
