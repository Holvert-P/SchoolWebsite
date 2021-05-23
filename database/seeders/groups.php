<?php

namespace Database\Seeders;

use App\Models\group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class groups extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $runs=[
            ['grades_id'=> '1','description'=>'A','number_students'=>'48'],
            ['grades_id'=> '2','description'=>'A','number_students'=>'48'],
            ['grades_id'=> '2','description'=>'B','number_students'=>'48'],
            ['grades_id'=> '1','description'=>'B','number_students'=>'48'],
            ['grades_id'=> '2','description'=>'C','number_students'=>'48'],
         
        
    ];

    DB::table('groups')->delete();

    foreach($runs as $run){
        group::create($run);
    }
    }
}
