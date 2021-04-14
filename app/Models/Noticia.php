<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'img',
        'title',
        'desc',
        'content',
        'slug',
        'user_id'
    ];

    public function getAll()
    {
        return Noticia::orderby('created_at', 'desc')->paginate();
    }

    public function getLimit($limit)
    {
        return Noticia::orderby('created_at', 'desc')->limit($limit)->get();
    }

    public function countViews()
    {
        return $this->hasOne(CountView::class, 'noticia_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
        # code...
    }
}
