<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DealersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dealer::create(['name' => 'FendtDealer']);
        Dealer::create(['name' => 'TestDealer']);
        Dealer::create(['name' => 'SchmidtDealer']);
    }
}
