<?php

namespace Database\Seeders;

use App\Models\email;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class emails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs=[
            ['email_address'=> 'perezholvert@gmail.com'],
            ['email_address'=> 'perezholvert1@gmail.com'],
            ['email_address'=> 'perezholvert2@gmail.com'],
            ['email_address'=> 'perezholvert3@gmail.com'],
            ['email_address'=> 'perezholvert4@gmail.com'],
            ['email_address'=> 'perezholvert5@gmail.com'],
            ['email_address'=> 'perezholvert6@gmail.com'],
            ['email_address'=> 'perezholvert7@gmail.com'],
            ['email_address'=> 'school@gmail.com'],
      
        
    ];

    DB::table('emails')->delete();

    foreach($runs as $run){
        email::create($run);
    }
    }
}
