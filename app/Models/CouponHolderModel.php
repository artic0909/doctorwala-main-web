<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponHolderModel extends Model
{
    use HasFactory;

    protected $table = 'coupon_holder_models';

    protected $fillable = [
        'currently_loggedin_partner_id',
        'coupon_code',
        'coupon_amount',
        'coupon_start_date',
        'coupon_end_date',
    ];
}
