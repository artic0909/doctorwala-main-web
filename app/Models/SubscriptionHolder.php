<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionHolder extends Model
{
    use HasFactory;

    protected $table = 'subscription_holder';

    protected $fillable = [
        'currently_loggedin_partner_id',
        'subscription_id',
        'subscription_title',
        'subscription_amount',
        'transaction_id',
        'partner_clinic_name',
        'partner_contact_person_name',
        'partner_mobile_number',
        'partner_email',
        'current_holding_date', //current date of when subscribed by partner
        'close_date', // date of when subscription will be closed (e.g if subscription is 3 months, close_date will be 3 months after current_holding_date)
    ];

    public function partner()
    {
        return $this->belongsTo(DwPartnerModel::class, 'currently_loggedin_partner_id');
    }
}
