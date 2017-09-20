<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'name',
    ];

    public function user()
    {
        return $this->hasOne('App\Model\User');
    }
}
