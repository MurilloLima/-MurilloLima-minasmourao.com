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

    public function orcamentos()
    {
        return $this->hasMany(Orcamento::class, 'uid', 'uid');
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($user) { // before delete() method call this
            $user->orcamentos()->delete();
        });
    }
}
