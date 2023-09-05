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

    public function backendCreateNews() {
        return view('backend.pages.backend_createnews');
    }


    //API Methods
    public function createNews(Request $request) {
        // dd($request->all());exit();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'img_news_event' => 'required|image', // ตรวจสอบว่าเป็นไฟล์รูปภาพ
        ]);

        $newsEvent = new NewsEvent();
        $newsEvent->name = $request->input('name');
        $newsEvent->description = $request->input('description');
        $newsEvent->content = $request->input('content');

        // อัปโหลดรูปภาพและบันทึกชื่อไฟล์ลงในฐานข้อมูล
        $image = $request->file('img_news_event');
        $imgName = '/upload/images/'.time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
        $newsEvent->img_news_events = $imgName;

        $newsEvent->save();

        return response()->json([
            'status' => 'success',
            'message' => 'บันทึกข้อมูล NewsEvent สำเร็จ',
        ], 200);
    }
}
