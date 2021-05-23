<?php

namespace Database\Seeders;

use App\Models\school;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class schools extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['name'=> 'Portillo','address'=>'km 157'],
        
    ];

    DB::table('class_matters')->delete();

    foreach($runs as $run){
        school::create($run);
    }

    }
}
