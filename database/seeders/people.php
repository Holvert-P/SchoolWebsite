<?php

namespace Database\Seeders;
use App\Models\peoples;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class people extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $runs=[
            ['users_id'=> '1','names'=> 'Holvert','last_names'=> 'Perez','sex'=> 'Masculino','address'=> 'Esteli'],
            ['users_id'=> '2','names'=> 'Josue','last_names'=> 'Josue','sex'=> 'Masculino','address'=> 'Esteli'],
            ['users_id'=> '3','names'=> 'Jester','last_names'=> 'Jester','sex'=> 'Masculino','address'=> 'Esteli'],
            ['users_id'=> '4','names'=> 'Jose','last_names'=> 'Jose','sex'=> 'Masculino','address'=> 'Esteli'],
            ['users_id'=> '5','names'=> 'Luis','last_names'=> 'Luis','sex'=> 'Masculino','address'=> 'Esteli'],
            ['users_id'=> '6','names'=> 'Bismark','last_names'=> 'Bismark','sex'=> 'Masculino','address'=> 'Esteli'],
            ['users_id'=> '7','names'=> 'Lopez','last_names'=> 'Lopez','sex'=> 'Masculino','address'=> 'Esteli'],
            ['users_id'=> '8','names'=> 'Escorcia','last_names'=> 'Escorcia','sex'=> 'Masculino','address'=> 'Esteli']    
    ];

    DB::table('peoples')->delete();

    foreach($runs as $run){
        peoples::create($run);
    }
    }
}
