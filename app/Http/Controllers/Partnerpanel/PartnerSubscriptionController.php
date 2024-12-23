<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use Illuminate\Http\Request;
use App\Models\SubscriptionHolder;
use App\Models\SuperSubscriptionModel;
use Illuminate\Support\Facades\Auth;

class PartnerSubscriptionController extends Controller
{

    protected $guard = 'partner';






    public function allSubscriptions()
    {

        $partner = Auth::guard('partner')->user();
        $subs = SuperSubscriptionModel::get();

        return view('subscription', compact('subs', 'partner'));
    }








    protected $merchantKey = 'fMmB7HZo';
    protected $merchantSalt = 'yjrDz7IzD4';

    public function initiateComingPayment(Request $request)
    {
        $merchantKey = 'fMmB7HZo';
        $merchantSalt = 'yjrDz7IzD4';
        $partner = Auth::guard('partner')->user();
        $amount = $request->subs_amount;
        $txnid = uniqid();
        $email = $request->partner_email;
        $productInfo = $request->subs_title;
        $firstname = $request->partner_clinic_name;
        $successUrl = route('partnerpanel.payu.callback');
        $failureUrl = route('partnerpanel.payu.callback');

    
        $hashString = $this->merchantKey . "|" . $txnid . "|" . $amount . "|" . $productInfo . "|" . $firstname . "|" . $email . "|||||||||||" . $this->merchantSalt;
        $hash = strtolower(hash('sha512', $hashString));

        $payuUrl = 'https://secure.payu.in/_payment';

        return view('partnerpanel.payu_payment', compact('payuUrl', 'txnid', 'amount', 'productInfo', 'firstname', 'email', 'successUrl', 'failureUrl', 'hash', 'merchantKey', 'partner', 'merchantSalt'));
    }


    public function paymentCallback(Request $request)
    {
        $postedHash = $request->input('hash');
        $key = $request->input('key');
        $txnid = $request->input('txnid');
        $amount = $request->input('amount');
        $productInfo = $request->input('productinfo');
        $firstname = $request->input('firstname');
        $email = $request->input('email');
        $status = $request->input('status');

      
        $hashString = $this->merchantSalt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productInfo . '|' . $amount . '|' . $txnid . '|' . $key;
        $calculatedHash = strtolower(hash('sha512', $hashString));

      
        if ($calculatedHash !== $postedHash) {
            return redirect()->route('partnerpanel.sub-fail')->with('error', 'Payment verification failed.');
        }

        if ($status === 'success') {
            $partner = Auth::guard('partner')->user();

            if (!$partner) {
                return redirect()->route('partnerpanel.sub-fail')->with('error', 'Payment verification failed.');
            }

            $currentDate = now();
            $subscriptionDurationMonths = 3; 
            $closeDate = $currentDate->copy()->addMonths($subscriptionDurationMonths);

            SubscriptionHolder::create([
                'currently_loggedin_partner_id' => $partner->id,
                'subscription_title' => $productInfo,
                'subscription_amount' => $amount,
                'transaction_id' => $txnid,
                'partner_clinic_name' => $firstname,
                'partner_contact_person_name' => $partner->name,
                'partner_mobile_number' => $partner->mobile_number,
                'partner_email' => $email,
                'current_holding_date' => $currentDate,
                'close_date' => $closeDate,
            ]);

         
            DwPartnerModel::where('id', $partner->id)->update(['status' => 'Active']);

           
            Auth::guard('partner')->login($partner);

            return redirect()->route('partnerpanel.partner-dashboard')->with('success', 'Subscription added successfully!');
        } else {
            return redirect()->route('partnerpanel.sub-fail')->with('error', 'Payment failed.');
        }
    }
}
