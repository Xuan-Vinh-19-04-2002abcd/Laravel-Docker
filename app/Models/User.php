<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    protected $table = "users";
    protected $fillable = ['email','fullname','password','phonenumber','avatar']; 
    public function posts (){
        return $this->hasMany(\App\Models\Post::class);
    }
    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class);
    }
}
