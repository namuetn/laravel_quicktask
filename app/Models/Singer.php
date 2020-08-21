<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = [
        'singer_id',
        'name',
        'category',
    ];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
