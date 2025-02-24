<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_code',
        'course_name',
        'syllabus',
        'durations',
        'price',
        'description',
        'major_id',
    ];

    public $timestamps = true;
}