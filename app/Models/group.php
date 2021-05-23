<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;
    
    public function grades()
    {
        return $this->belongsTo('App\Models\grade','grades_id');
    }
}
