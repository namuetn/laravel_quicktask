<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'singer_id',
        'name',
        'category',
    ];

    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }
}
