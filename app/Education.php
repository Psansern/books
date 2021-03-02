<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table='education';
    protected $fillable=[
        'edu_name',
        'edu_short_name'
    ];
}
