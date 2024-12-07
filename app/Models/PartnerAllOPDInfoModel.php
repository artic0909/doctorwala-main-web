<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerAllOPDInfoModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'partner_all_o_p_d_info_models'; // Standardize the table name formatting

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'currently_loggedin_partner_id',
        'doctors', // Stores the JSON data for doctors
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'doctors' => 'array', // Automatically cast JSON data to an array
    ];

    /**
     * Relationship: Partner
     * Define a relationship to the Partner model if applicable.
     */
    public function partner()
    {
        return $this->belongsTo(DwPartnerModel::class, 'currently_loggedin_partner_id');
    }
}
