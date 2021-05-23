<?php

namespace Database\Seeders;

use App\Models\class_matter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class class_matters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['name'=> 'Ciencias Naturales','description'=>'ninguna'],
            ['name'=> 'Sociales','description'=>'ninguna'],
            ['name'=> 'Geografia','description'=>'ninguna']    
    ];

    DB::table('class_matters')->delete();

    foreach($runs as $run){
        class_matter::create($run);
    }
    }
}
