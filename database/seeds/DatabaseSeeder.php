<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RolesSeeder::class,
            RoleUserSeeder::class,
            MethodsSeeder::class,
            ModulesSeeder::class,
        ]);
    }
}
