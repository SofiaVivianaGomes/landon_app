<?php

use Illuminate\Database\Seeder;
use Illuminate\Suppport\Facades\DB; //to import the database facade

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(ClientTableSeeder::class);
    }
}
