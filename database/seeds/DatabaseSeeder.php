<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(EmpSeeder::class);
         // $this->call(ContactsSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(CompanySeeder::class);
    }
}
