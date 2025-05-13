<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use App\Models\SubscriptionHolder;
use App\Models\SuperSubscriptionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class PartnerSubscriptionController extends Controller
{
    protected $merchantKey = 'fMmB7HZo';
    protected $merchantSalt = 'yjrDz7IzD4';

    public function allSubscriptions()
    {
        $partner = Auth::guard('partner')->user();
        $subs = SuperSubscriptionModel::all();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partner)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partner)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partner)->first();
        return view('partnerpanel.partner-get-subscription', compact('subs', 'partner', 'opdBanner', 'pathologyBanner', 'doctorBanner'));
    }

    public function payment(Request $request)
    {
        $merchantKey = 'fMmB7HZo';
        $merchantSalt = 'yjrDz7IzD4';
        $payuUrl = 'https://secure.payu.in/_payment';
        $txnid = uniqid();
        $amount = $request->subs_amount;
        $email = $request->partner_email;
        $productInfo = $request->subs_title;
        $firstname = $request->partner_clinic_name;

        Cache::put('partner_payment_' . $txnid, [
            'partner_id' => Auth::guard('partner')->id(),
            'subscription_data' => ['title' => $productInfo, 'amount' => $amount]
        ], now()->addMinutes(30));

        $hashString = $this->merchantKey . '|' . $txnid . '|' . $amount . '|' . $productInfo . '|' . $firstname . '|' . $email . '|||||||||||' . $this->merchantSalt;
        $hash = strtolower(hash('sha512', $hashString));

        $successUrl = route('partnerpanel.payment.callback');
        $failureUrl = route('partnerpanel.payment.callback');

        return view('partnerpanel.payu_payment', compact('txnid', 'amount', 'productInfo', 'firstname', 'email', 'successUrl', 'failureUrl', 'hash', 'payuUrl', 'merchantKey', 'merchantSalt', 'txnid'));
    }

    public function paymentCallback(Request $request)
    {
        $txnid = $request->input('txnid');
        $postedHash = $request->input('hash');
        $status = $request->input('status');
        $email = $request->input('email');
        $firstname = $request->input('firstname');
        $productInfo = $request->input('productinfo');
        $amount = $request->input('amount');

        $cachedData = Cache::get('partner_payment_' . $txnid);

        if (!$cachedData) {
            Log::error('Invalid transaction ID or session expired.', ['txnid' => $txnid]);
            return response()->json(['error' => 'Session expired. Please try again.'], 400);
        }

        $partnerId = $cachedData['partner_id'];
        $subscriptionData = $cachedData['subscription_data'];

        $hashString = $this->merchantSalt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productInfo . '|' . $amount . '|' . $txnid . '|' . $this->merchantKey;
        $calculatedHash = strtolower(hash('sha512', $hashString));

        if ($calculatedHash !== $postedHash) {
            Log::error('Hash mismatch detected.', ['expected' => $calculatedHash, 'provided' => $postedHash]);
            return response()->json(['error' => 'Payment verification failed.'], 400);
        }

        if ($status === 'success') {
            $currentDate = now();
            $closeDate = $currentDate->copy()->addMonths(3);

            SubscriptionHolder::create([
                'currently_loggedin_partner_id' => $partnerId,
                'subscription_title' => $subscriptionData['title'],
                'subscription_amount' => $subscriptionData['amount'],
                'transaction_id' => $txnid,
                'partner_clinic_name' => $firstname,
                'partner_contact_person_name' => Auth::guard('partner')->user()->name,
                'partner_mobile_number' => Auth::guard('partner')->user()->mobile_number,
                'partner_email' => $email,
                'current_holding_date' => $currentDate,
                'close_date' => $closeDate,
            ]);

            DwPartnerModel::where('id', $partnerId)->update(['status' => 'Active']);

            Log::info('Payment processed successfully.', ['txnid' => $txnid]);
            return response()->json(['success' => 'Payment processed successfully.'], 200);
        }

        Log::warning('Payment failed.', ['txnid' => $txnid, 'status' => $status]);
        return response()->json(['error' => 'Payment failed. Please try again.'], 400);
    }


        public function showInvoice()
    {
        $partner = Auth::guard('partner')->user();
        $subs = SuperSubscriptionModel::all();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partner)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partner)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partner)->first();
        return view('partnerpanel.partner-show-invoice', compact('subs', 'partner', 'opdBanner', 'pathologyBanner', 'doctorBanner'));
    }
}
