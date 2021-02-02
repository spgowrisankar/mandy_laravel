<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'comp_name' => 'mandy',
                'city' => 'Coimbatore',
                'emp_id' => 2
            ],
            [
                'comp_name' => 'Vital',
                'city' => 'Portmourth',
                'emp_id' => 3
            ],
            [
                'comp_name' => 'TCS',
                'city' => 'Chennai',
                'emp_id' => 1
            ]
        ]);
    }
}
