<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;

class DwPartnerModel extends Authenticatable
{

    use Notifiable;

    protected $table = 'dw_partner_models';

    public $fillable = [
        'partner_id',
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
        'status',
    ];

    protected $casts = [
        'registration_type' => 'array',
    ];

    protected $hidden = [
        'partner_password',
        'remember_token',
    ];

    // Specify custom attribute for password field
    public function getAuthPassword()
    {
        return $this->partner_password;
    }




    public function opdContact()
    {
        return $this->hasOne(PartnerOPDContactModel::class, 'partner_id');
    }

    public function pathologyContact()
    {
        return $this->hasOne(PartnerPathologyContactModel::class, 'partner_id');
    }

    public function doctorContact()
    {
        return $this->hasOne(PartnerDoctorContactModel::class, 'partner_id');
    }

    public function opdbanner()
    {
        return $this->hasOne(PartnerOPDBannerModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }


    public function opdContactt()
    {
        return $this->hasOne(PartnerOPDContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }



    public function pathbanner()
    {
        return $this->hasOne(PartnerPathologyBannerModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }


    public function pathContactt()
    {
        return $this->hasOne(PartnerPathologyContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }


    public function docbanner()
    {
        return $this->hasOne(PartnerDoctorBannerModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }


    public function docContactt()
    {
        return $this->hasOne(PartnerDoctorContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }
}
