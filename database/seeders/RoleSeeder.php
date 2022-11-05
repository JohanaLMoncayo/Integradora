<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
     $role2 = Role::create(['name' =>'user1']);
     $role3 = Role::create(['name' =>'user2']);

    
     Permission::create(['name' => 'user1.formulario.index'])->assignRole($role2);
     Permission::create(['name' => 'user2.pacientecovid.index'])->assignRole($role3);


}
}