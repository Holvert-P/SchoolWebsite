<?php

namespace Database\Seeders;

use App\Models\alumno;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['peoples_id'=>5,'turns_id'=> 1,'grades_id'=> 1,'groups_id'=> 1],
            ['peoples_id'=>6,'turns_id'=> 1,'grades_id'=> 1,'groups_id'=> 1],
            ['peoples_id'=>7,'turns_id'=> 1,'grades_id'=> 1,'groups_id'=> 1],
            ['peoples_id'=>8,'turns_id'=> 1,'grades_id'=> 1,'groups_id'=> 1],
 
    ];

    DB::table('alumnos')->delete();

    foreach($runs as $run){
        alumno::create($run);
    }

    }
}
