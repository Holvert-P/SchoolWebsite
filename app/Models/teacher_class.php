<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher_class extends Model
{

    use HasFactory;

    public function teacher()
    {
        return $this->belongsTo('App\Models\teacher','teachers_id');
    }
    public function class_mater()
    {
        return $this->belongsTo('App\Models\class_mater','class_matters_id');
    }
}
