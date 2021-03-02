<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='course';
    protected $fillable=[
        'course_code',
        'course_name_th',
        'course_name_en',
        'course_short_name_th',
        'course_short_name_en',
        'course_type',
        'course_years',
        'major_id',
        'faculty_id'
    ];
}
