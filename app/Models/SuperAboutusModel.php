<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAboutusModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_image',
        'ab_title',
        'ab_b_txt',
        'ab_desc',
        'ab_mission',
        'ab_vision',
        'number',
        'email',
    ];
}
