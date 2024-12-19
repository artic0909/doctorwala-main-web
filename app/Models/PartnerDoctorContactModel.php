<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerDoctorContactModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'currently_loggedin_partner_id',
        'clinic_registration_type',
        'partner_doctor_name',
        'partner_doctor_specialist',
        'partner_doctor_designation',
        'partner_doctor_fees',
        'partner_doctor_mobile',
        'partner_doctor_email',
        'partner_doctor_landmark',
        'partner_doctor_pincode',
        'partner_doctor_google_map_link',
        'partner_doctor_state',
        'partner_doctor_city',
        'partner_doctor_address',
        'visit_day_time',
        'status',
    ];

    protected $casts = [
        'visit_day_time' => 'array', //it contain fields like partner_doctor_visit_day, partner_doctor_visit_start_time, partner_doctor_visit_end_time
    ];



    public function partner()
    {
        return $this->belongsTo(DwPartnerModel::class, 'currently_loggedin_partner_id');
    }

    public function banner()
    {
        return $this->hasOne(PartnerDoctorBannerModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }
}
