<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $fillable = ['title'];
    
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
