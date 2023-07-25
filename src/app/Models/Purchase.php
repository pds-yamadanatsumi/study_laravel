<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
