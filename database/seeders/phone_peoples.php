<?php

namespace Database\Seeders;

use App\Models\phone_people;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class phone_peoples extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['peoples_id'=> '1','phones_id'=> '1'],
            ['peoples_id'=> '2','phones_id'=> '2'],
            ['peoples_id'=> '3','phones_id'=> '3'],
            ['peoples_id'=> '4','phones_id'=> '4'],
            ['peoples_id'=> '5','phones_id'=> '5'],
            ['peoples_id'=> '6','phones_id'=> '6'],
            ['peoples_id'=> '7','phones_id'=> '7'],
            ['peoples_id'=> '8','phones_id'=> '8'],
           
    ];

    DB::table('phone_peoples')->delete();

    foreach($runs as $run){
        phone_people::create($run);
    }

    }
}
