<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;

    public function peoples()
    {
        return $this->belongsTo('App\Models\peoples','peoples_id');
    }
    protected $fillable=[
        'peoples_id',
        'grades_id',
        'turns_id',
        'groups_id',
            ];
}
