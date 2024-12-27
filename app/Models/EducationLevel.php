<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    //
    protected $fillable = [
        'degree',
        'course',
        'university',
        'institution',
        'percent',
        'gradYear',
        'user_id'
    ];
}
