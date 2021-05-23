<?php

namespace Database\Seeders;

use App\Models\teacher_class;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class teacher_classes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['teachers_id'=> 1,'class_matters_id'=>1],
            ['teachers_id'=> 2,'class_matters_id'=>2],
            ['teachers_id'=> 3,'class_matters_id'=>3],
            ['teachers_id'=> 4,'class_matters_id'=>4],
        
    ];

    DB::table('teacher_classes')->delete();

    foreach($runs as $run){
        teacher_class::create($run);
    }

    }
}
