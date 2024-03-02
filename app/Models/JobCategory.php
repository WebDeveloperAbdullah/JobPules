<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $fillable = ['jobCategoryName','jobCategoryImage'] ;
    protected $attributes=  ['active'=>'1'];
    public function jobCategory(){
        return $this->hasOne(JobCategory::class);
    }
}
