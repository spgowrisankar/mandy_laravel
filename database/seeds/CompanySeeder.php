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
                'comp_name' => 'Mandy',
                'city' => 'Coimbatore',
                'employee_id' => 2
            ],
            [
                'comp_name' => 'Vital',
                'city' => 'Portmourth',
                'employee_id' => 3
            ],
            [
                'comp_name' => 'TCS',
                'city' => 'Chennai',
                'employee_id' => 1
            ],
            [
                'comp_name' =>  'Wipro',
                'city' => 'Bangalore',
                'employee_id' => 1
            ]
        ]);
    }
}
