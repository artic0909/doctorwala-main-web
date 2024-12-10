<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerDoctorBannerModel extends Model
{
    use HasFactory;

    protected $table = 'partner_doctor_banner_models';

    protected $fillable = [
        'currently_loggedin_partner_id',
        'docotorbanner',
    ];
}
