<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\NewsEvent;

class BackendNewsEventController extends Controller
{
    //
    public function backendNewsEvent() {
        $newsevents = NewsEvent::all();
        return view('backend.pages.backend_newsandevent', compact('newsevents'));
    }
}
