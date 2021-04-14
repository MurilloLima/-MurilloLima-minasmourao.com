<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'img',
        'title'
    ];

    public function getAll()
    {
        $data = Slider::orderby('created_at', 'desc')->get();
        return $data;
        # code...
    }
}
