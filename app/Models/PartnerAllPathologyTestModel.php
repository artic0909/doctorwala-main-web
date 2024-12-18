<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerAllPathologyTestModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'currently_loggedin_partner_id',
        'test_name',
        'test_type',
        'test_price',
        'test_day_time',
        'status',
    ];


    protected $casts = [
        'test_day_time' => 'array', //it contain fields like doctor_visit_day, doctor_visit_start_time, doctor_visit_end_time
    ];

    public function pathContact()
    {
        return $this->belongsTo(PartnerPathologyContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }
}
