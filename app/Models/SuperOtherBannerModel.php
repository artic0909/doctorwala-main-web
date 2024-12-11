<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperOtherBannerModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_image',
    ];
}
