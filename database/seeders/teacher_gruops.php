<?php

namespace Database\Seeders;

use App\Models\teacher_gruop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teacher_gruops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['teacher_id'=> 1,'group_id'=>1],
            ['teacher_id'=> 2,'group_id'=>2],
            ['teacher_id'=> 3,'group_id'=>3],
            ['teacher_id'=> 4,'group_id'=>4],
        
    ];

    DB::table('teacher_gruops')->delete();

    foreach($runs as $run){
        teacher_gruop::create($run);
    }

    }
}
