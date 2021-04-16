<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'uid',
        'name',
        'email',
        'phone',
        'address',
        'obs',
    ];
}
