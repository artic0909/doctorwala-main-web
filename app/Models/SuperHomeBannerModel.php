<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperHomeBannerModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_image',
        'title',
        'desc',
    ];
}
