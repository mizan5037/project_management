<?php

use Illuminate\Database\Seeder;
// use Database\seeds\UserTableSeeder;
// use Database\seeds\RoleTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(RoleTableSeeder::class);
    }
}
