<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_matter extends Model
{
    use HasFactory;
  
    protected $fillable=[
        'name',
        'description'
        
            ];
}
