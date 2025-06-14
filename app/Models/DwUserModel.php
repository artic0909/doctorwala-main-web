<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;

class DwUserModel extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'dw_user_models';

    protected $fillable = [
        'user_name',
        'user_mobile',
        'user_city',
        'user_email',
        'user_password',
        'api_token',
    ];

    protected $hidden = [
        'partner_password',
        'remember_token',
    ];

    // Specify custom attribute for password field
    public function getAuthPassword()
    {
        return $this->user_password;
    }
}
