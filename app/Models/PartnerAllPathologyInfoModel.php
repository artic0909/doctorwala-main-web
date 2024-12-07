<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerAllPathologyInfoModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'partner_all_pathology_info_models'; // Standardize the table name formatting

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'currently_loggedin_partner_id',
        'pathology_tests', // Stores the JSON data for pathology_tests
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'pathology_tests' => 'array', // Automatically cast JSON data to an array
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
