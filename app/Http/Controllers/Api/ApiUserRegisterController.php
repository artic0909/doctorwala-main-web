<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DwUserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiUserRegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'user_mobile' => 'required|string|max:15|unique:dw_user_models,user_mobile',
            'user_city' => 'required|string|max:255',
            'user_email' => 'required|email|unique:dw_user_models,user_email',
            'user_password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Create user
        $user = DwUserModel::create([
            'user_name' => $request->user_name,
            'user_mobile' => $request->user_mobile,
            'user_city' => $request->user_city,
            'user_email' => $request->user_email,
            'user_password' => Hash::make($request->user_password),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Registration successful, please login.',
            'data' => $user,
        ], 200);
    }
}
