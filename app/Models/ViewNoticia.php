<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewNoticia extends Model
{
    protected $fillable = [
        'noticia_id',
        'views'
    ];
}
