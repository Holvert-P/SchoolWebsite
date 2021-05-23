<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\phone_school;
class phone_schools extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['schools_id'=> '1','phones_id'=> '1'],
    ];

    DB::table('phone_schools')->delete();

    foreach($runs as $run){
        phone_school::create($run);
    }
    }
}
