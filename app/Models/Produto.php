<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'img',
        'title',
        'desc',
        'content',
        'slug',
        'user_id'
    ];
}
