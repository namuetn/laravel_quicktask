<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = [
        'name',
        'city',
        'dob',
    ];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
