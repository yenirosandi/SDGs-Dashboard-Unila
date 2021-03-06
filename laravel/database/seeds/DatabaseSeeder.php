<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\seeds;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GoalsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TrendTableSeeder::class);
        $this->call(MasterTableSeeder::class);
        $this->call(SumberdataTableSeeder::class);
        $this->call(SubTableSeeder::class);

    }
}
