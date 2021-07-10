<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'permissions' => json_encode([
                    'user-list' => true,
                    'user-add' => true,
                    'user-edit' => true,
                    'user-delete' => true,
                    'role-list' => true,
                    'role-add' => true,
                    'role-edit' => true,
                    'role-delete' => true,
                ]),
            ]
        ]);
    }
}
