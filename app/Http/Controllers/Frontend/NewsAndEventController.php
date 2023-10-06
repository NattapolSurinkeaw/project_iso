<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsEvent;

class NewsAndEventController extends Controller
{
    //
    public function newsAndEventPage() {
        $new_news = NewsEvent::orderBy('id', 'desc')->take(8)->get();
        $newsEvents = NewsEvent::paginate(8);
        $topnews = NewsEvent::orderBy('view', 'desc')->take(4)->get();
        return view('pages.app_newsandevent.newsandevent', compact('newsEvents', 'topnews', 'new_news'));
    }

    public function newsDetail($id) {
        $getNews = NewsEvent::find($id);

        if ($getNews) {
            // เพิ่มจำนวนยอดผู้เข้าชม
            $getNews->increment('view');
        }

        return view('pages.app_newsandevent.newsdetail', compact('getNews'));
    }

}
