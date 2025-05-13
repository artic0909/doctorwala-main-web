<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PartnerAllOPDDoctorModel;
use Illuminate\Http\Request;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerServiceListModel;

class ApiAllOPDController extends Controller
{
    public function allOpdData()
    {
        $allOpdContacts = PartnerOPDContactModel::with('banner')->get();

        $finalData = $allOpdContacts->map(function ($contact) {
            if ($contact->banner && $contact->banner->opdbanner) {
                $contact->banner->opdbanner = asset('storage/' . $contact->banner->opdbanner);
            }

            $partnerId = $contact->currently_loggedin_partner_id;

            $tests = PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $partnerId)->get();
            foreach ($tests as $test) {
                $test->test_day_time = json_decode($test->test_day_time, true);
            }

            return [
                'opdContact' => $contact,
                'doctors' => $tests,
                'services' => PartnerServiceListModel::where('currently_loggedin_partner_id', $partnerId)->get(),
                'opdDetailsData' => PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $partnerId)->get(),
                
            ];
        });

        return response()->json([
            'status' => true,
            'count' => $finalData->count(),
            'data' => $finalData,
        ]);
    }
}
