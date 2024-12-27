<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralInfo extends Model
{
    //
    protected $fillable = [
        'address',
        'phone',
        'dob',
        'user_id'
    ];
}
