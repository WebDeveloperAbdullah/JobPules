<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professionalTrainings extends Model
{
    public function traininer(){
        return $this->belongsTo(CandidateProfile::class);
    }
}
