<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobExperiences extends Model
{
    public function experinces(){
        return $this->belongsTo(CandidateProfile::class);
    }
}
