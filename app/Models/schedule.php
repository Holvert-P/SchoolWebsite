<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    public function classroom()
    {
        return $this->belongsTo('App\Models\classroom','classroom_id');
    }
    public function turn()
    {
        return $this->belongsTo('App\Models\turn','turns_id');
    }
    //use el matters_id para relacionar el grupo, puesto que me hacia falta poner la foranea del grupo en schedules y como me sobraba ese no quise borrar todo lo que tenia xD
    public function groups()
    {
        return $this->belongsTo('App\Models\group','matters_id');
    }
    public function teacher_class()
    {
        return $this->belongsTo('App\Models\teacher_class','teachers_id');
    }
}
