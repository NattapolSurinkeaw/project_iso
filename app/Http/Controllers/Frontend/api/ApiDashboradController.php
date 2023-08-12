<?php

namespace App\Http\Controllers\Frontend\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiDashboradController extends Controller
{
    //
    public function editUser(Request $request, $user_id ) {

        // dd($request);
        

        return response([
            'status' => 200,
            'message' => 'success'
        ], 200);



    }
}
