<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userData extends Model
{
    protected $fillable = [
        'Name',
        'Email',
        'Password'
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'Password' => 'hashed',
        ];
    }
}
