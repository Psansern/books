<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefix extends Model
{
    protected $table='prefix';
    protected $fillable=[
        'id','prefix'];

}
