<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerPathologyContactModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'currently_loggedin_partner_id',
        'clinic_registration_type',
        'clinic_contact_person_name',
        'clinic_name',
        'clinic_gstin',
        'clinic_mobile_number',
        'clinic_email',
        'clinic_landmark',
        'clinic_pincode',
        'clinic_state',
        'clinic_city',
        'clinic_google_map_link',
        'clinic_address',
        'status',
    ];



    public function partner()
    {
        return $this->belongsTo(DwPartnerModel::class, 'currently_loggedin_partner_id');
    }



    public function banner()
    {
        return $this->hasOne(PartnerPathologyBannerModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }


    public function tests()
    {
        return $this->hasMany(PartnerAllPathologyTestModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }
}
