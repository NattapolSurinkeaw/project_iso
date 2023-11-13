<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\HomeVideo;
use App\Models\HomeDocument;
use App\Models\BannerImage;

class WebContentController extends Controller
{
    //
    public function contentHome() {
        // dd($allSessions);
        $homeVideos = HomeVideo::select('id', 'thumbnail')->take(5)->get();
        $homeDocuments = HomeDocument::all();
        $banners = BannerImage::all();
        return view('backend.pages.web_content.content_home', compact('banners', 'homeVideos', 'homeDocuments'));
    }

    public function getVideo($vid_id){
        $homevideo = HomeVideo::find($vid_id);

        if($homevideo){
            return response()->json([
                'status' => 'success',
                'data' => $homevideo
            ] , 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'home video not found'
            ] , 404);
        }
    }

    public function editVideo(Request $request, $vid_id) {
        $homevideo = HomeVideo::find($vid_id);

        if(!$homevideo){
            return response()->json([
                'status' => 'error',
                'message' => 'home video not found'
            ] , 404);
        }

        $validator = Validator::make($request->all(), [
            'video_url' => 'required',
            'input_type' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $image = $request->file('thumbnail');
            $imgName = '/upload/images/homevideo/' . time() . '.' . $image->getClientOriginalExtension();

            // ตรวจสอบว่ามีรูปเก่าใน $user->img_profile หรือไม่
            if (!empty($homevideo->thumbnail)) {
                // ถ้ามีรูปเก่า ให้ลบไฟล์เก่าที่อยู่ใน $user->img_profile
                File::delete(public_path($homevideo->thumbnail));
            }

            $image->move(public_path('upload/images/homevideo'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
            $homevideo->thumbnail = $imgName;
        }
        $homevideo->url = $request->input('video_url');
        $homevideo->type_input = $request->input('input_type');
        $homevideo->save();

        return response()->json([
            'status' => 'success',
            'message' => 'home video edit successfully'
        ], 201);
    }

    public function getDocument($doc_id){
        $document = HomeDocument::find($doc_id);

        if(!$document){
            return response()->json([
                'status' => 'error',
                'message' => 'not found home document'
            ], 404);
        } else {
            return response()->json([
                'status' => 'success',
                'data' => $document
            ], 200);
        }
    }

    public function editHomeDoc(Request $request, $doc_id) {
        $document = HomeDocument::find($doc_id);

        if(!$document){
            return response()->json([
                'status' => 'error',
                'message' => 'not found home document'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name_doc' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        if ($request->hasFile('thumbFile') && $request->file('thumbFile')->isValid()) {
            $image = $request->file('thumbFile');
            $imgName = '/upload/images/homedocument/' . time() . '.' . $image->getClientOriginalExtension();

            // ตรวจสอบว่ามีรูปเก่าใน $user->img_profile หรือไม่
            if (!empty($document->thumbnail)) {
                // ถ้ามีรูปเก่า ให้ลบไฟล์เก่าที่อยู่ใน $user->img_profile
                File::delete(public_path($document->thumbnail));
            }

            $image->move(public_path('upload/images/homedocument'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
            $document->thumbnail = $imgName;
        }

        if ($request->hasFile('documentFile') && $request->file('documentFile')->isValid()) {
            $docfile = $request->file('documentFile');
            $docName = '/upload/pdf/homedocument/' . time() . '.' . $docfile->getClientOriginalExtension();

            // ตรวจสอบว่ามีรูปเก่าใน $user->img_profile หรือไม่
            if (!empty($document->path)) {
                // ถ้ามีรูปเก่า ให้ลบไฟล์เก่าที่อยู่ใน $user->img_profile
                File::delete(public_path($document->path));
            }

            $docfile->move(public_path('upload/pdf/homedocument'), $docName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
            $document->path = $docName;
        }

        $document->name = $request->input('name_doc');
        $document->description = $request->input('description');
        $document->save();

        return response()->json([
            'status' => 'success',
            'message' => 'data is saved successfully'
        ], 201);

    }
}
