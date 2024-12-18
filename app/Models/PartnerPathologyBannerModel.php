<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerPathologyBannerModel extends Model
{
    use HasFactory;

    protected $table = 'partner_pathology_banner_models';

    protected $fillable = [
        'currently_loggedin_partner_id',
        'pathologybanner',
    ];

    public function pathContact()
    {
        return $this->belongsTo(PartnerPathologyContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }
}
