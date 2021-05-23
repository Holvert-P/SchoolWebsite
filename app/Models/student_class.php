<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_class extends Model
{
    use HasFactory;

    public function class_matters()
    {
        return $this->belongsTo('App\Models\class_matter','class_matters_id');
    }
    public function alumnos()
    {
        return $this->belongsTo('App\Models\alumno','students_id');
    }
    public function notes()
    {
        return $this->belongsTo('App\Models\note','notes_id');
    }
    protected $fillable=[
        'students_id',
        'class_matters_id',
        'notes_id',
        'observations' 
            ];
}
