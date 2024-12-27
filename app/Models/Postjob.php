<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postjob extends Model
{
    protected $fillable = [
        'title',
        'deadline',
        'level',
        'vacancy_no',
        'location',
        'salary',
        'education_level',
        'experience',
        'skills',
        'description',
        'employer_id'
    ];
}
