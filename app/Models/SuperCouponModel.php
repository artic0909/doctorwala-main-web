<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperCouponModel extends Model
{
    use HasFactory;

    public $fillable = [
        'coupon_image',
        'coupon_code',
        'coupon_amount',
        'coupon_start_date',
        'coupon_end_date',
        'status',
    ];
}
