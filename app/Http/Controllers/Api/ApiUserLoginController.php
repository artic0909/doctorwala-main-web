<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\DwUserModel;
use Illuminate\Support\Facades\Hash;

class ApiUserLoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate required fields
        $validator = Validator::make($request->all(), [
            'user_identifier' => 'required|string',
            'user_password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Identify if it's an email or phone
        $identifier = $request->user_identifier;
        $fieldType = filter_var($identifier, FILTER_VALIDATE_EMAIL) ? 'user_email' : 'user_mobile';

        // Find user
        $user = DwUserModel::where($fieldType, $identifier)->first();

        if (!$user || !Hash::check($request->user_password, $user->user_password)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        // Login the user (if using session-based or token auth)
        Auth::guard('dwuser')->login($user);

        return response()->json([
            'status' => true,
            'message' => 'Login successful',
            'data' => [
                'id' => $user->id,
                'name' => $user->user_name,
                'mobile' => $user->user_mobile,
                'city' => $user->user_city,
                'email' => $user->user_email,
            ]
        ]);
    }






    public function logout(Request $request)
    {
        Auth::guard('dwuser')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'status' => true,
            'message' => 'Logout successful'
        ]);
    }
}
