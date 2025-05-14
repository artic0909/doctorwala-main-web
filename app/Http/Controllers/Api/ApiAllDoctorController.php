<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PartnerDoctorContactModel;
use Illuminate\Http\Request;

class ApiAllDoctorController extends Controller
{
    public function allDoctorData()
    {
        $allDoctorContacts = PartnerDoctorContactModel::with('banner')->get();

        // Fix banner URL for doctors
        $allDoctorContacts->map(function ($contact) {
            if ($contact->banner && $contact->banner->docotorbanner) {
                // Ensure the full URL is set for the banner
                $contact->banner->docotorbanner = url('storage/' . $contact->banner->docotorbanner);
            }
            return $contact;
        });

        return response()->json([
            'status' => true,
            'count' => $allDoctorContacts->count(),
            'allDoctorContacts' => $allDoctorContacts,
        ]);
    }
}
