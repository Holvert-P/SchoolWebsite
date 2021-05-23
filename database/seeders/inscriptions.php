<?php

namespace Database\Seeders;
use App\Models\inscription;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class inscriptions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $runs=[
            ['users_id'=> '1','students_id'=> '1','groups_id'=> '1'],
            ['users_id'=> '1','students_id'=> '2','groups_id'=> '1'],
            ['users_id'=> '1','students_id'=> '3','groups_id'=> '1'],
            ['users_id'=> '1','students_id'=> '4','groups_id'=> '2'],
            ['users_id'=> '1','students_id'=> '5','groups_id'=> '2'],
            ['users_id'=> '1','students_id'=> '6','groups_id'=> '2'],
        
    ];

    DB::table('class_matters')->delete();

    foreach($runs as $run){
        inscription::create($run);
    }
    }
}
