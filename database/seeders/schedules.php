<?php

namespace Database\Seeders;

use App\Models\schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class schedules extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['matters_id'=> '1','teachers_id'=> '1','classroom_id'=> '1','turns_id'=> '1','hour'=> '7:00:00','status'=> 1],
            ['matters_id'=> '1','teachers_id'=> '2','classroom_id'=> '2','turns_id'=> '1','hour'=> '7:00:00','status'=> 1],
            ['matters_id'=> '1','teachers_id'=> '3','classroom_id'=> '3','turns_id'=> '1','hour'=> '7:00:00','status'=> 1],
            ['matters_id'=> '1','teachers_id'=> '4','classroom_id'=> '4','turns_id'=> '1','hour'=> '7:00:00','status'=> 1],
    ];

    DB::table('schedules')->delete();

    foreach($runs as $run){
        schedule::create($run);
    }

    }
}
