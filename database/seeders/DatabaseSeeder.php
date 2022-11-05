<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\formulario;
use App\Models\pacientecovid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
