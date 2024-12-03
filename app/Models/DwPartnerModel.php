<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;

class DwPartnerModel extends Authenticatable
{

    use Notifiable;
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
}
