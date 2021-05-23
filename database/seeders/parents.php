<?php

namespace Database\Seeders;

use App\Models\parentses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class parents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['identification_card'=> '161','students_id'=> '1','users_id'=> '3'],
            ['identification_card'=> '162','students_id'=> '2','users_id'=> '3'],
            ['identification_card'=> '163','students_id'=> '3','users_id'=> '3'],
            ['identification_card'=> '164','students_id'=> '4','users_id'=> '3'],
        
    ];

    DB::table('parentses')->delete();

    foreach($runs as $run){
        parentses::create($run);
    }

    }
}
