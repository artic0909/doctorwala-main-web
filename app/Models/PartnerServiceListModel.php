<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerServiceListModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'currently_loggedin_partner_id',
        'service_lists', //array
    ];

    protected $casts = [
        'service_lists' => 'array',
    ];
}
