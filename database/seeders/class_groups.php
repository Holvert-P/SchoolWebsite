<?php

namespace Database\Seeders;

use App\Models\class_group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class class_groups extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['groups_id'=> 1,'class_id'=> 1],
            ['groups_id'=> 1,'class_id'=> 2],
            ['groups_id'=> 1,'class_id'=> 3],
 
    ];

    DB::table('class_groups')->delete();

    foreach($runs as $run){
        class_group::create($run);
    }

    }
}
