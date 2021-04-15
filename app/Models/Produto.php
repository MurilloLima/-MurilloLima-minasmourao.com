<?php

namespace App\Models;

use App\User;
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
    public function getAll()
    {
        return Produto::orderby('created_at', 'desc')->paginate();
    }

    public function getLimit($limit)
    {
        return Produto::orderby('created_at', 'desc')->limit($limit)->get();
    }

    public function produtoViews()
    {
        return $this->hasOne(ViewProduto::class, 'produto_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
        # code...
    }
}
