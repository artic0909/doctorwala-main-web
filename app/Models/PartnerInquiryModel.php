<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerInquiryModel extends Model
{
    use HasFactory;

    protected $table = 'partner_inquiry_models';

    protected $fillable = [
        'currently_loggedin_partner_id',
        'partner_clinic_name',
        'partner_contact_person_name',
        'partner_mobile_number',
        'partner_email',
        'partner_state',
        'partner_city',
        'partner_landmark',
        'partner_pincode',
        'partner_problem',
        'partner_problem_reply',
        'ticket_id',
    ];
}
