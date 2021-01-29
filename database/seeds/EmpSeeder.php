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
        DB::table('employee')->insert([
            'name' => 'Ram',
            'roles' => 'Senior Developer',
            'email' => 'ram@example.com'
        ]);

    }
}
