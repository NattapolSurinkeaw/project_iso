<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Trainingcourse;
use App\Models\Module;

class BackendTrainingController extends Controller
{
    //
    public function backendTraining() {
        $trainingcourses = Trainingcourse::all();
        return view('backend.pages.backend_training', compact('trainingcourses'));
    }

    public function createTraining() {
        $modules = Module::all();
        return view('backend.pages.backend_createtraining', compact('modules'));
    }

    public function editTraining($train_id) {
        $modules = Module::all();
        $training = Trainingcourse::find($train_id);

        return view('backend.pages.backend_edittraining', compact('modules', 'training'));
    }


    // API Methods
    public function getModuleId($mod_id) {
        $module = Module::find($mod_id);

        if (!$module) {
            return response()->json([
                'status' => 'error',
                'message' => 'module not found',
            ] ,404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $module,
        ], 200);
    }

    public function createModule(Request $request) {
        $validator = Validator::make($request->all(), [
            'module' => 'required|unique:modules,name'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Module already exists.',
            ], 400);
        }

        $newModule = new Module();
        $newModule->name = $request->input('module');
        $newModule->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Module added successfully.',
        ], 200);
    }

    public function editModule(Request $request, $mod_id) {
        $module = Module::find($mod_id);

        if(!$module) {
            return response()->json([
                'status' => 'error',
                'message' => 'Module not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'module' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Module already exists.',
            ], 400);
        }

        $module->name = $request->input('module');
        $module->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Module updated successfully.',
        ], 200);
    }

    public function delModule($mod_id) {
        $module = Module::find($mod_id);

        if (!$module) {
            return response()->json([
                'status' => 'error',
                'message' => 'Module not found',
            ] ,400);
        }

        $module->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'training deleted successfully'
        ], 200);
    }

    public function cretaTraining(Request $request) {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'module' => 'required',
            'code' => 'required|unique:modules,name',
            'name' => 'required',
            'training_detail' => 'required',
            'day' => 'required',
            'fee' => 'required',
            'date' => 'required',
            'img_training' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Module already exists.',
            ], 400);
        }

        $training = new Trainingcourse;
        $training->module_id = $request->input('module');
        $training->code = $request->input('code');
        $training->name = $request->input('name');
        $training->training_detail = $request->input('training_detail');
        $training->day = $request->input('day');
        $training->fee = $request->input('fee');
        $training->date = $request->input('date');

        $image = $request->file('img_training');
        $imgName = '/upload/images/training/'.time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/images/training'), $imgName); // บันทึกไฟล์ไว้ในโฟลเดอร์ public/images
        $training->img_training = $imgName;

        $training->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Training was saved successfully',
        ], 200);
    }
}
