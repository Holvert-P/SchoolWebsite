<?php

namespace Database\Seeders;

use App\Models\phone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class phones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $runs=[
            ['phone_number'=> '1'],
            ['phone_number'=> '2'],
            ['phone_number'=> '3'],
            ['phone_number'=> '4'],
            ['phone_number'=> '5'],
            ['phone_number'=> '6'],
            ['phone_number'=> '7'],
            ['phone_number'=> '8'],
            ['phone_number'=> '9'],

        
    ];

    DB::table('phones')->delete();

    foreach($runs as $run){
        phone::create($run);
    }
    }
}
