<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    use HasFactory;


    protected $fillable=[
        'IP',
        'IIP',
         'IIIP',
         'IVP',
         'matters_id'
        
            ];
}