<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasRoles;
    protected $fillable = ['email','otp','password','role_id'] ;
    protected $attributes=  [
        'active'=>1,
        'otp'=>'0'


    ];
    public function user(){
        return $this->hasOne(UserProfile::class);
    }
}
