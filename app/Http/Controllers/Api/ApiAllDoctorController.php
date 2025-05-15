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

        $allDoctorContacts = $allDoctorContacts->map(function ($contact) {
            if ($contact->banner && $contact->banner->doctorbanner) {
                // Fix path with full URL using asset or url()
                $contact->banner->doctorbanner = asset('storage/' . $contact->banner->doctorbanner);
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
