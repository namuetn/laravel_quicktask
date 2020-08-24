<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name',
        'city',
        'dob',
    ];

    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }
}
