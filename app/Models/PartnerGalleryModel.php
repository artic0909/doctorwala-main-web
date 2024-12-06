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
}
