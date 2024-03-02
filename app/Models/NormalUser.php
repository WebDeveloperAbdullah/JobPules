<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NormalUser extends Model
{
    protected $attributes=  ['active'=>'1'];

    public function normalUser(){
        return $this->hasOne(PostComment::class);
    }
}
