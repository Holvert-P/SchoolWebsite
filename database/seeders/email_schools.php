<?php

namespace Database\Seeders;
use App\Models\email_school;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class email_schools extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['schools_id'=> '1','emails_id'=>'9'],
      
    ];

    DB::table('email_schools')->delete();

    foreach($runs as $run){
        email_school::create($run);
    }
    }
}
