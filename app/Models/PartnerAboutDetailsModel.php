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
}
