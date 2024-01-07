<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Elerningcourse;
use App\Models\PendingCourse;

class CartController extends Controller
{
    //
    public function addToCart(Request $request) {
        $courseId = $request->input('course_id');
        $cartList = Session::get('cart_list', []);

        array_push($cartList, $courseId);
        Session::put('cart_list', $cartList);
        return response()->json([
            'status' => 'success',
            'message' => 'Course added to cart'
        ],200);
    }

    public function removeCart(Request $request) {
        $courseId = $request->input('course_id');
        $cartList = Session::get('cart_list', []);
        $cartList = array_diff($cartList, [$courseId]); // ลบคอร์สออกจากรายการ
        Session::put('cart_list', $cartList);
        return response()->json([
            'status' => 'success',
            'message' => 'Course removed from cart'
        ], 200);
    }

    public function cartPage() {
        $cartList = session('cart_list', []); // ดึงข้อมูลจาก Session

        $cartCourses = Elerningcourse::whereIn('id', $cartList)->get();
        // dd($cartList);
        return view('pages.app_cart.cart', compact('cartCourses','cartList'));
    }

    public function paymentForm() {

        $cartList = session('cart_list', []);
        $cartCourses = Elerningcourse::whereIn('id', $cartList)->get();

        return view('pages.app_cart.paymentform', compact('cartCourses','cartList'));
    }


    // API Methods
    public function pendingPayment(Request $request) {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'totalcourse' => 'required',
            'totalprice' => 'required',
            'banknumber' => 'required',
            'totalmoney' => 'required',
            'date_transfer' => 'required',
            'customertel' => 'required',
            'bankcustomer' => 'required',
            'bankcompany' => 'required',
            'slippayment' => 'required|image',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'validator data failed check input data.',
            ], 400);
        }

        $pendingCourse = new PendingCourse;
        $pendingCourse->name = $request->input('name');
        $pendingCourse->total_courses = $request->input('totalcourse');
        $pendingCourse->total_price = $request->input('totalprice');
        $pendingCourse->customer_banknumber = $request->input('banknumber');
        $pendingCourse->totalmoney = $request->input('totalmoney');
        $pendingCourse->customer_tel = $request->input('customertel');
        $pendingCourse->bankcustomer = $request->input('bankcustomer');
        $pendingCourse->bankcompany = $request->input('bankcompany');
        $pendingCourse->date_transfer = $request->input('date_transfer');
        $pendingCourse->user_id = $request->input('user_id');
        $pendingCourse->reading = "no";
        $pendingCourse->status = "pending";

        $image = $request->file('slippayment');
        $imgName = '/upload/images/payments/'.time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images/payments'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
        $pendingCourse->payment_slip = $imgName;

        $pendingCourse->save();
        return response()->json([
            'status' => 'success',
            'message' => ''
        ], 200);

    }

    public function removeAllCart() {
        Session::forget('cart_list');
        return response()->json([
            'status' => 'success',
            'message' => 'All items removed from the cart'
        ], 200);
    }

}
