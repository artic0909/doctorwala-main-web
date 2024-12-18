<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerGalleryModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'currently_loggedin_partner_id',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
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
