<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvCod extends Model
{
    protected $fillable = [
        'email', 'user_id', 'codigo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'codigo', 'remember_token',
    ];
}
