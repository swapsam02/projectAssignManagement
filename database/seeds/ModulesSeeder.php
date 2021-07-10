<?php

use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            [
                'name' => 'System Setting',
                'parent' => 0,
            ],
            [
                'name' => 'User',
                'parent' => 1,
            ],
            [
                'name' => 'Role',
                'parent' => 1,
            ],
        ]);
    }
}
