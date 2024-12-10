<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerOPDBannerModel extends Model
{
    use HasFactory;

    protected $table = 'partner_o_p_d_banner_models';

    protected $fillable = [
        'currently_loggedin_partner_id',
        'opdbanner',
    ];
}
