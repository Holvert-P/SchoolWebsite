<?php

namespace Database\Seeders;

use App\Models\classroom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classrooms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['capacity'=> '50','location'=>'A1'],
            ['capacity'=> '50','location'=>'A2'],
            ['capacity'=> '50','location'=>'A3'],
            ['capacity'=> '50','location'=>'A4'],
    ];

    DB::table('classrooms')->delete();

    foreach($runs as $run){
        classroom::create($run);
    }
    }
}
