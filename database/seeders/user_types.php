<?php

namespace Database\Seeders;

use App\Models\user_type;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class user_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['description'=> 'profesor'],
            ['description'=> 'alumno'],
            ['description'=> 'padre'],
            ['description'=> 'director'],
    ];

    DB::table('user_types')->delete();

    foreach($runs as $run){
        user_type::create($run);
    }

    }
}
