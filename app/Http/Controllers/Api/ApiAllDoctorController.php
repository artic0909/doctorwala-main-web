<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PartnerDoctorContactModel;
use Illuminate\Http\Request;

class ApiAllDoctorController extends Controller
{
    public function index()
    {
        $allDoctorContacts = PartnerDoctorContactModel::with('banner')->get();


        $allDoctorContacts->map(function ($contact) {
            if ($contact->banner && $contact->banner->docotorbanner) {
                $contact->banner->docotorbanner = asset('storage/' . $contact->banner->docotorbanner);
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
