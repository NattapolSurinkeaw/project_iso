<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\NewsEvent;

class BackendNewsEventController extends Controller
{
    //
    public function backendNewsEvent() {
        $newsevents = NewsEvent::all();
        return view('backend.pages.news.backend_newsandevent', compact('newsevents'));
    }

    public function backendCreateNews() {
        return view('backend.pages.news.backend_createnews');
    }

    public function backendEditNews($news_id) {
        $news = NewsEvent::find($news_id);
        return view('backend.pages.news.backend_editnews', compact('news'));
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
        ], 201);
    }

    public function editNews(Request $request, $news_id) {
        // dd($request->all());
        $news = NewsEvent::find($news_id);

        if(!$news) {
            return response()->json([
                'status' => 'error',
                'message' => 'not found news'
            ], 404);
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

            // ตรวจสอบว่ามีรูปเก่าใน $user->img_profile หรือไม่
            if (!empty($news->img_news_events)) {
                // ถ้ามีรูปเก่า ให้ลบไฟล์เก่าที่อยู่ใน $user->img_profile
                File::delete(public_path($news->img_news_events));
            }   

            $image->move(public_path('upload/images/news'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
            $news->img_news_events = $imgName;
        }

        $news->save();

        return response()->json([
            'status' => 'success',
            'message' => 'บันทึกข้อมูล NewsEvent สำเร็จ',
        ], 201);
    }

    public function deleteNews($news_id) {
        $news = NewsEvent::find($news_id);

        if(!$news) {
            return response()->json([
                'status' => 'error',
                'message' => 'news not found'
            ], 404);
        }

        $news->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'news deleted successfully'
        ], 204);
    }
}
