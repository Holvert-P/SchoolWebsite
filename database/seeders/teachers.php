<?php

namespace Database\Seeders;

use App\Models\teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class teachers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['peoples_id'=> '1','users_id'=> '1'],
            ['peoples_id'=> '2','users_id'=> '1'],
            ['peoples_id'=> '3','users_id'=> '1'],
            ['peoples_id'=> '4','users_id'=> '1'],     
    ];

    DB::table('class_matters')->delete();

    foreach($runs as $run){
        teacher::create($run);
    }

    }
}
