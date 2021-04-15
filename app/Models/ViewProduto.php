<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewProduto extends Model
{
    protected $fillable = [
        'produto_id',
        'views'
    ];
}
