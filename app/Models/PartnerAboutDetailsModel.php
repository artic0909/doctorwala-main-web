<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerAboutDetailsModel extends Model
{
    use HasFactory;

    protected $table = 'partner_about_details_models';

    protected $fillable = [
        'currently_loggedin_partner_id',
        'about_details',
        'mission_details',
        'vision_details',
    ];





    public function opdContact()
    {
        return $this->belongsTo(PartnerOPDContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }


    public function pathContact()
    {
        return $this->belongsTo(PartnerPathologyContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }


    public function docContact()
    {
        return $this->belongsTo(PartnerDoctorContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }
}
