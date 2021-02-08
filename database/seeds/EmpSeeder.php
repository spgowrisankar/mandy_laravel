<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'Rathina',
                'roles' => 'Megento Developer'
            ],
            [
                'name' => 'Vys',
                'roles' => 'Megento Developer'
            ],
            [
                'name' => 'Ram',
                'roles' => 'Wordpress Developer'
            ],
            [
                'name' => 'Pradeep',
                'roles' => 'Wordpress Developer'
            ]
        ]);

    }
}
