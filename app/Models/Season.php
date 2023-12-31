<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    public function series()
    {
        return $this->belongsTo(Serie::class); //// pertence a um
    }

    public function episodes()
    {
     return $this->hasMany(Episode::class); /// tem muito
    }
}
