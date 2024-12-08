<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerOPDContactModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'currently_loggedin_partner_id',
        'clinic_registration_type',
        'clinic_contact_person_name',
        'clinic_gstin',
        'clinic_mobile_number',
        'clinic_email',
        'clinic_landmark',
        'clinic_pincode',
        'clinic_state',
        'clinic_city',
        'clinic_google_map_link',
        'clinic_address',
    ];
}
