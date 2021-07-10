<?php

use Illuminate\Database\Seeder;

class MethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('methods')->insert([
            [
                'module_id' => 2,
                'route_name' => 'user-list',
                'published' => true
            ],
            [
                'module_id' => 2,
                'route_name' => 'user-add',
                'published' => true
            ],
            [
                'module_id' => 2,
                'route_name' => 'user-edit',
                'published' => true
            ],
            [
                'module_id' => 2,
                'route_name' => 'user-delete',
                'published' => false
            ],
            [
                'module_id' => 3,
                'route_name' => 'role-list',
                'published' => true
            ],
            [
                'module_id' => 3,
                'route_name' => 'role-add',
                'published' => true
            ],
            [
                'module_id' => 3,
                'route_name' => 'role-edit',
                'published' => true
            ],
            [
                'module_id' => 3,
                'route_name' => 'role-delete',
                'published' => true
            ],
            [
                'module_id' => 3,
                'route_name' => 'role-permissions',
                'published' => false
            ],
        ]);
    }
}
