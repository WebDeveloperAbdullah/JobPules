<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const IS_OWNER = 1;
    public const IS_ADMIN = 2;
    public const IS_COMPANIE=3;
    public const IS_EMPLOYER = 4;
    public const IS_CANDIDATE= 5;
}
