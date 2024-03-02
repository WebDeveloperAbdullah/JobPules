<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['userName','fastName','lastName','userImage','user_id' ];
    public function userProfile(){
        return $this->belongsTo(User::class);
    }
}
