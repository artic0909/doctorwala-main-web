<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperSubscriptionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'subs_image',
        'subs_title',
        'subs_amount',
        'subs_open_date',
        'subs_close_date',
        'features',
        'status',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
