<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['email','otp','password','role_id'] ;
    protected $attributes=  [
        'active'=>1,
        'otp'=>'0'


    ];
    public function user(){
        return $this->hasOne(UserProfile::class);
    }
}
