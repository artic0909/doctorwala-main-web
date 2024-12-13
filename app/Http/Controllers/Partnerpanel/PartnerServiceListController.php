<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerServiceListModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerServiceListController extends Controller
{
    // View all services
    public function index()
    {
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();

        $serviceList = PartnerServiceListModel::where('currently_loggedin_partner_id', $partnerId)->first();

        $services = $serviceList ? $serviceList->service_lists : [];

        $partner = Auth::guard('partner')->user();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }


        return view('partnerpanel.partner-service-lists', compact('opdBanner', 'pathologyBanner','doctorBanner', 'services', 'registrationTypes'));
    }

    // Add a new service
    public function store(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        $request->validate([
            'service' => 'required|string',
        ]);

        // Retrieve or create the service list for the current partner
        $serviceList = PartnerServiceListModel::firstOrNew(['currently_loggedin_partner_id' => $partnerId]);
        $services = $serviceList->service_lists ?: [];

        // Add the new service
        $services[] = $request->service;

        $serviceList->service_lists = $services;
        $serviceList->save();

        return redirect()->route('partner.services.index')->with('success', 'Service added successfully.');
    }

    // Update a service
    public function update(Request $request, $index)
    {
        $partnerId = Auth::guard('partner')->id();

        $request->validate([
            'service' => 'required|string',
        ]);

        $serviceList = PartnerServiceListModel::where('currently_loggedin_partner_id', $partnerId)->firstOrFail();
        $services = $serviceList->service_lists ?: [];

        // Check if the index exists in the array
        if (isset($services[$index])) {
            $services[$index] = $request->service; // Update the service
            $serviceList->service_lists = $services;
            $serviceList->save();

            return redirect()->route('partner.services.index')->with('success', 'Service updated successfully.');
        }

        return redirect()->route('partner.services.index')->with('error', 'Service not found.');
    }

    // Delete a service
    public function destroy($index)
    {
        $partnerId = Auth::guard('partner')->id();

        $serviceList = PartnerServiceListModel::where('currently_loggedin_partner_id', $partnerId)->firstOrFail();
        $services = $serviceList->service_lists ?: [];

        // Check if the index exists in the array
        if (isset($services[$index])) {
            unset($services[$index]); // Remove the service
            $serviceList->service_lists = array_values($services); // Reindex the array
            $serviceList->save();

            return redirect()->route('partner.services.index')->with('success', 'Service deleted successfully.');
        }

        return redirect()->route('partner.services.index')->with('error', 'Service not found.');
    }
}
