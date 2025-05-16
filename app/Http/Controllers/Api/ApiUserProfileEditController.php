<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        // Get authenticated user ID using custom guard
        $userId = Auth::guard('dwuser')->id();

        if (!$userId) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthenticated',
            ], 401);
        }

        // Perform update
        $update = DB::table('dw_user_models')
            ->where('id', $userId)
            ->update([
                'user_name'   => $request->user_name,
                'user_mobile' => $request->user_mobile,
                'user_email'  => $request->user_email,
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
}
