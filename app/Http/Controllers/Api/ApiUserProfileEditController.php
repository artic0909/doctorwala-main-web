<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApiUserProfileEditController extends Controller
{
    public function updateProfile(Request $request)
    {
        // Validate input
        $request->validate([
            'user_name'   => 'required|string|max:255',
            'user_mobile' => 'required|string|max:15',
            'user_email'  => 'required|email|max:255',
            'user_city'   => 'required|string|max:255',
        ]);

        // Find the user by email
        $user = DB::table('dw_user_models')->where('user_email', $request->user_email)->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found',
            ], 404);
        }

        // Perform the update
        $update = DB::table('dw_user_models')
            ->where('user_email', $request->user_email)
            ->update([
                'user_name'   => $request->user_name,
                'user_mobile' => $request->user_mobile,
                'user_city'   => $request->user_city,
            ]);

        if ($update) {
            return response()->json([
                'status' => true,
                'message' => 'Profile updated successfully',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No changes were made or update failed',
            ]);
        }
    }




    public function getProfile(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email',
        ]);

        $user = DB::table('dw_user_models')->where('user_email', $request->user_email)->first();

        if ($user) {
            return response()->json([
                'status' => true,
                'message' => 'Profile fetched successfully',
                'data' => $user,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'User not found',
            ]);
        }
    }




    public function updatePassword(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email|exists:dw_user_models,user_email',
            'user_password' => 'required|string|min:6',
        ]);

        // Fetch the user as a model, not as a stdClass from DB::table
        $user = \App\Models\DwUserModel::where('user_email', $request->user_email)->first();

        if ($user) {
            // Check if the new password is same as the current hashed password
            if (Hash::check($request->user_password, $user->user_password)) {
                return response()->json([
                    'status' => false,
                    'message' => 'New password cannot be the same as the old password.',
                ]);
            }

            // Hash and update the new password
            $user->user_password = Hash::make($request->user_password);
            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'Updated successfully! Please Re-login.',
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'User not found.',
        ]);
    }
}
