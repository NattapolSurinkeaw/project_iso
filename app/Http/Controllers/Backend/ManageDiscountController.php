<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CodeDiscount;
use Illuminate\Http\Request;

class ManageDiscountController extends Controller
{
    //
    public function managediscount() {
        $discount = CodeDiscount::all();
        return view('backend.pages.manage_discount.code_discount', compact('discount'));
    }

    public function create_discount(Request $request) {
        $request->validate([
            'code' => 'required|unique:code_discounts',
            'discount' => 'required',
            'display' => 'required',
            'date_start' => 'required',
            'date_expire' => 'required',
        ]);
        
        CodeDiscount::create([
            'code' => $request->input('code'),
            'discount' => $request->input('discount'),
            'display' => $request->input('display'),
            'date_start' => $request->input('date_start'),
            'date_expire' => $request->input('date_expire'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'create discount successfully'
        ], 201);
    }

    public function getDiscount($id) {
        $discount = CodeDiscount::find($id);
        return response()->json([
            'status' => "success",
            'data' => $discount
        ], 200);
    }

    public function edit_discount(Request $request, $id) {
        $request->validate([
            'code' => 'required|unique:code_discounts',
            'discount' => 'required',
            'display' => 'required',
            'date_start' => 'required',
            'date_expire' => 'required',
        ]);

        $discount = CodeDiscount::find($id);

        if(!$discount) {
            return response()->json([
                'status' => "error",
                'message' => "data not found",
            ], 404);
        }
   
        $discount->code = $request->input('code');
        $discount->discount = $request->input('discount');
        $discount->display = $request->input('display');
        $discount->date_start = $request->input('date_start');
        $discount->date_expire = $request->input('date_expire');
        $discount->save();

        return response()->json([
            'status' => "success",
            'message' => "edit data is successful"
        ], 201);
    }

    public function delete_discount($id) {
        $discount = CodeDiscount::find($id);
        
        if(!$discount) {
            return response()->json([
                'status' => 'error',
                'message' => 'data not found'
            ], 404);
        }

        $discount->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'data is delete succesfully'
        ], 201);
    }
    
}
