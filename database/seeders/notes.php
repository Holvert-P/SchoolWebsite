<?php

namespace Database\Seeders;

use App\Models\note;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class notes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        $runs=[
            ['matters_id'=> '1','IP'=> 78,'IIP'=> 59,'IIIP'=> 79,'IVP'=> 100],
            ['matters_id'=> '2','IP'=> 78,'IIP'=> 59,'IIIP'=> 79,'IVP'=> 100],
            ['matters_id'=> '3','IP'=> 78,'IIP'=> 59,'IIIP'=> 79,'IVP'=> 100],
    ];

    DB::table('class_matters')->delete();

    foreach($runs as $run){
        note::create($run);
    }
    }
}
