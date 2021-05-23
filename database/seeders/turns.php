<?php

namespace Database\Seeders;

use App\Models\turn;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class turns extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['description'=> 'Matutino'],
            ['description'=> 'Vespertino'],
    ];

    DB::table('turns')->delete();

    foreach($runs as $run){
        turn::create($run);
    }

    }
}
