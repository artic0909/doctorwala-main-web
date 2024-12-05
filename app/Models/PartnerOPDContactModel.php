<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerOPDContactModel extends Model
{
    public $fillable =[
        'partner_id', // foreign key of dw_partner_models table
        'registration_type', // foreign key of dw_partner_models table & this field is an array so in this case only take OPD from the array
        'clinic_contact_person_name',
        'clinic_gst_number', //optional
        'clinic_email',
        'clinic_landmark',
        'clinic_pincode',
        'clinic_google_map__link', //optional
        'clinic_state',
        'clinic_city',
        'clinic_address',
    ];
}
