<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    public function comments(){
        return $this->belongsTo(NormalUser::class);
    }
}
