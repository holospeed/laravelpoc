<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Create DEALERS */
        // $this->call(DealersTableSeeder::class);
        \App\Models\Dealer::factory(4)->create();
        /* Create USERS */
        \App\Models\User::factory(2)->create();
        /* Create BUSINESSES */
        //$this->call(BusinessesTableSeeder::class);
        \App\Models\Business::factory(3)->create();
        /* Create MACHINES */
        //$this->call(MachinesTableSeeder::class);
        \App\Models\Machine::factory(20)->create();
    }
}
