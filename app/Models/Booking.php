<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function pitchs () {
        return $this->belongsTo(\App\Models\Pitch::class);
    }
    public function matchs(){
        return $this->hasMany(\App\Models\Matchs::class);
    }
}
