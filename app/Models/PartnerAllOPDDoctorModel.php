<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerAllOPDDoctorModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'currently_loggedin_partner_id',
        'doctor_name',
        'doctor_designation',
        'doctor_specialist',
        'doctor_fees',
        'doctor_more',
        'visit_day_time',
        'status',
    ];


    protected $casts = [
        'visit_day_time' => 'array', //it contain fields like doctor_visit_day, doctor_visit_start_time, doctor_visit_end_time
    ];


    public function opdContact()
    {
        return $this->belongsTo(PartnerOPDContactModel::class, 'currently_loggedin_partner_id', 'currently_loggedin_partner_id');
    }
    
}
