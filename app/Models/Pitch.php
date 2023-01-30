<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
    use HasFactory;
    protected $table = "pitchs";
    protected $fillable = ['namepitch','address','phonenumber','image','price_hour']; 

    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class);
    }
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class);
    }
}

