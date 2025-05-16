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
        // Validate input
        $validator = Validator::make($request->all(), [
            'user_email' => 'required|email',
            'user_password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Find user
        $user = DwUserModel::where('user_email', $request->user_email)->first();

        if (!$user || !Hash::check($request->user_password, $user->user_password)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        // Login the user (session-based)
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
        Auth::guard('dwuser')->logout(); // logs out the dwuser session
        $request->session()->invalidate(); // invalidate session
        $request->session()->regenerateToken(); // regenerate CSRF token

        return response()->json([
            'status' => true,
            'message' => 'Logout successful'
        ]);
    }
}
