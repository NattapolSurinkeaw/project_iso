<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Elerningcourse;

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
}
