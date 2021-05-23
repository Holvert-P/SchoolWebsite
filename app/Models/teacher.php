<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    public function people()
    {
        return $this->belongsTo('App\Models\peoples','peoples_id');
    }
}
