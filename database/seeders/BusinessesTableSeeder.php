<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::create(['name' => 'FendtValidation']);
        Business::create(['name' => 'TestValidation']);
        Business::create(['name' => 'SchmidtValidation']);
    }
}
