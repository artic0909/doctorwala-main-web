<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerFeedback extends Model
{

    use HasFactory;
    
    public $fillable = [
        'currently_loggedin_partner_id',
        'clinic_type',
        'clinic_name',
        'user_name',
        'user_email',
        'rating',
        'feedback',
    ];
}
