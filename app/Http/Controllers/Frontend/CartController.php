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
        $cartList = Session::get('cart_list', ['items' => [], 'amount' => 0]);
    
        // Check if "items" key exists in $cartList
        if (!isset($cartList['items'])) {
            $cartList['items'] = [];
        }
    
        if (in_array($courseId, $cartList['items'])) {
            return response()->json([
                'status' => 'success',
                'message' => 'Course already in cart',
                'amount' => $cartList['amount']
            ], 200);
        } else {
            $cartList['items'][] = $courseId;
            
            // Check if "amount" key exists in $cartList
            if (!isset($cartList['amount'])) {
                $cartList['amount'] = 0;
            }
    
            $cartList['amount'] += 1;
            Session::put('cart_list', $cartList);
    
            return response()->json([
                'status' => 'success',
                'message' => 'Course added to cart',
                'amount' => $cartList['amount']
            ], 200);
        }
    }

    public function removeCart(Request $request) {
        $courseId = $request->input('course_id');
        $cartList = Session::get('cart_list', []);
      
        if (isset($cartList['items']) && in_array($courseId, $cartList['items'])) {
            $cartList['items'] = array_diff($cartList['items'], [$courseId]); // ลบคอร์สออกจากรายการ
            $cartList['amount'] = isset($cartList['amount']) ? max(0, $cartList['amount'] - 1) : 0;
            Session::put('cart_list', $cartList);
            return response()->json([
                'status' => 'success',
                'message' => 'Course removed from cart'
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Course not found in your cart'
            ], 204);
        }
    }

    public function cartPage() {
        $cartList = session('cart_list', []); // ดึงข้อมูลจาก Session
        $cartCourses = [];
        if(isset($cartList['items'])) {
            $cartCourses = Elerningcourse::whereIn('id', $cartList['items'])->get();
        }
        return view('pages.app_cart.cart', compact('cartCourses','cartList'));
    }

    public function paymentForm() {

        $cartList = session('cart_list', []);
        // dd($cartList);
        if(isset($cartList['items'])) {
            $cartCourses = Elerningcourse::whereIn('id', $cartList['items'])->get();
        }

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
