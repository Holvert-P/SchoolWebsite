<?php

namespace Database\Seeders;

use App\Models\email_people;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class email_peoples extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $runs=[
            ['peoples_id'=> '1','email_id'=>'1'],
            ['peoples_id'=> '2','email_id'=>'2'],
            ['peoples_id'=> '3','email_id'=>'3'],
            ['peoples_id'=> '4','email_id'=>'4'],
            ['peoples_id'=> '5','email_id'=>'5'],
            ['peoples_id'=> '6','email_id'=>'6'],
            ['peoples_id'=> '7','email_id'=>'7'],
            ['peoples_id'=> '8','email_id'=>'8'],
        
    ];

    DB::table('email_peoples')->delete();

    foreach($runs as $run){
        email_people::create($run);
    }

    }
}
