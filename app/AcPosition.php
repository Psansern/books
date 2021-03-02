<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcPosition extends Model
{
    protected $table='academic_position';
    protected $fillable=[
        'aca_position_th',
        'aca_position_short_th'
    ];

}
