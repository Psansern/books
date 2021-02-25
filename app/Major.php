<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Major extends Model
{
    protected $table='major';
    protected $fillable=[
        'major_name',
        'faculty_id'
];
public function facultys(){
    return $this->belongsTo(Faculty::class,'faculty_id');
}
}
