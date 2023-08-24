<?php

namespace App\Http\Controllers\Backend\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Elerningcourse;

class ApiBackendController extends Controller
{
    //

    public function getCourseById($id) {
        $course = Elerningcourse::find($id);

        if(empty($course)){
            return response()->json([
                "status" => "400",
                "message" => "data not found"
            ], 400);
        }

        return response()->json([
            "status" => "200",
            "data" => $course
        ], 200);
    }
}
