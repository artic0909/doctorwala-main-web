<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperBlogModel extends Model
{
    use HasFactory;
    protected $table = 'super_blog_models';

    public $fillable = [

        'blg_image',
        'blg_title',
        'blg_desc',

    ];
}
