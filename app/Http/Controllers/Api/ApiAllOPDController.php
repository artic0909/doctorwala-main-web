<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PartnerOPDContactModel;
use Illuminate\Http\Request;

class ApiAllOPDController extends Controller
{
     public function index()
    {
        $allOPDContacts = PartnerOPDContactModel::with('banner')->get();

        
        $allOPDContacts->map(function ($contact) {
            if ($contact->banner && $contact->banner->opdbanner) {
                $contact->banner->opdbanner = asset('storage/' . $contact->banner->opdbanner);
            }
            return $contact;
        });

        return response()->json([
            'status' => true,
            'count' => $allOPDContacts->count(),
            'allOPDContacts' => $allOPDContacts,
        ]);
    }
}
