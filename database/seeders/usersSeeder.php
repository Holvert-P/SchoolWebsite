<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
'name'=>'Holvert Josué Pérez',
'email'=>'perezholvert@gmail.com',
'password'=>bcrypt('123456789')
        ])->assignRole('administrador');

        User::factory(99)->create();
    }
}
