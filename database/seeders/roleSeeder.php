<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = Role::create(['name'=>'administrador']);
        $profesor = Role::create(['name'=> 'profesor']);

        Permission::create(['name' => 'admin.notes.create'])->syncRoles([$administrador,$profesor]);
        Permission::create(['name' => 'admin.notes.index'])->syncRoles([$administrador,$profesor]);
        Permission::create(['name' => 'admin.notes.edit'])->syncRoles([$administrador,$profesor]);


        Permission::create(['name' => 'admin.users.create'])->syncRoles([$administrador]);
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$administrador]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$administrador]);

     
    }
}
