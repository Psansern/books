<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table='faculty';
 protected $fillable=[
     'faculty_code',
     'faculty_name'
 ];
}
