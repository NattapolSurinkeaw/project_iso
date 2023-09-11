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

    public function backendEditNews($news_id) {
        $news = NewsEvent::find($news_id);
        return view('backend.pages.backend_editnews', compact('news'));
    }


    //API Methods
    public function createNews(Request $request) {
        // dd($request->all());exit();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'img_news_event' => 'required|image',
        ]);

        $newsEvent = new NewsEvent();
        $newsEvent->name = $request->input('name');
        $newsEvent->description = $request->input('description');
        $newsEvent->content = $request->input('content');

        // อัปโหลดรูปภาพและบันทึกชื่อไฟล์ลงในฐานข้อมูล
        $image = $request->file('img_news_event');
        $imgName = '/upload/images/news/'.time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images/news'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
        $newsEvent->img_news_events = $imgName;

        $newsEvent->save();

        return response()->json([
            'status' => 'success',
            'message' => 'บันทึกข้อมูล NewsEvent สำเร็จ',
        ], 200);
    }

    public function editNews(Request $request, $news_id) {
        // dd($request->all());
        $news = NewsEvent::find($news_id);

        if(!$news) {
            return response()->json([
                'status' => 'error',
                'message' => 'not found news'
            ], 400);
        }

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'content' => 'required'
        ]);

        $news->name = $request->input('name');
        $news->description = $request->input('description');
        $news->content = $request->input('content');

        if ($request->hasFile('img_news_event') && $request->file('img_news_event')->isValid()) {
            $image = $request->file('img_news_event');
            $imgName = '/upload/images/news/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/images/news'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
            $news->img_news_events = $imgName;
        }

        $news->save();

        return response()->json([
            'status' => 'success',
            'message' => 'บันทึกข้อมูล NewsEvent สำเร็จ',
        ], 200);
    }

    public function deleteNews($news_id) {
        $news = NewsEvent::find($news_id);

        if(!$news) {
            return response()->json([
                'status' => 'error',
                'message' => 'news not found'
            ], 400);
        }

        $news->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'news deleted successfully'
        ], 200);
    }
}