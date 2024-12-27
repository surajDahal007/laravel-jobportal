<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'designation',
        'company',
        'location',
        'role',
        'user_id'
    ];
}
