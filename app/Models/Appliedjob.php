<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appliedjob extends Model
{
    protected $fillable = [
        'title',
        'deadline',
        'job_id',
        'user_id'
    ];
}
