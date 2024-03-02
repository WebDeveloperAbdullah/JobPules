<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationInformation extends Model
{
    public function education(){
        return $this->belongsTo(CandidateProfile::class);
    }
}
