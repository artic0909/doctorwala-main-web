<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PartnerAboutDetailsModel;
use App\Models\PartnerAllPathologyTestModel;
use App\Models\PartnerGalleryModel;
use App\Models\PartnerPathologyContactModel;
use App\Models\PartnerServiceListModel;
use App\Models\SuperAboutusModel;
use Illuminate\Http\Request;

class ApiAllPathologyController extends Controller
{
    public function allPathologyData()
    {
        $allPathologyContacts = PartnerPathologyContactModel::with('banner')->get();

        $finalData = $allPathologyContacts->map(function ($contact) {
            if ($contact->banner && $contact->banner->pathologybanner) {
                $contact->banner->pathologybanner = asset('storage/' . $contact->banner->pathologybanner);
            }

            $partnerId = $contact->currently_loggedin_partner_id;

            $tests = PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partnerId)->get();
            foreach ($tests as $test) {
                $test->test_day_time = json_decode($test->test_day_time, true);
            }

            return [
                'pathologyContact' => $contact,
                'tests' => $tests,
                'services' => PartnerServiceListModel::where('currently_loggedin_partner_id', $partnerId)->get(),
                'images' => PartnerGalleryModel::where('currently_loggedin_partner_id', $partnerId)->get(),
                'aboutClinics' => PartnerAboutDetailsModel::where('currently_loggedin_partner_id', $partnerId)->get(),
                'testsDetailsData' => PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partnerId)->get(),
                
            ];
        });

        return response()->json([
            'status' => true,
            'count' => $finalData->count(),
            'data' => $finalData,
        ]);
    }
}
