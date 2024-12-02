<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctorwala_partner_id',
        'partner_clinic_name',
        'partner_contact_person_name',
        'partner_mobile_number',
        'partner_email',
        'partner_state',
        'partner_city',
        'partner_pincode',
        'partner_landmark',
        'partner_address',
        'partner_password',
        'partnerRegisterCaptchaInput',
        'registration_type',
    ];

    protected $casts = [
        'registration_type' => 'array', // To handle multiple registration types
    ];
}
