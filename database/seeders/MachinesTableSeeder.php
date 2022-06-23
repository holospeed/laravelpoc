<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Machine::create(['name' => '1000 Vario MT', 'model' => 'Fendt']);
        Machine::create(['name' => '1000 Vario MY21', 'model' => 'Fendt']);
        Machine::create(['name' => '1000 Vario', 'model' => 'Fendt']);
        Machine::create(['name' => '900 Vario MT', 'model' => 'Fendt']);
        Machine::create(['name' => '900 Vario MY21', 'model' => 'Fendt']);
        Machine::create(['name' => '900 Vario', 'model' => 'Fendt']);
        Machine::create(['name' => '800 Vario MT', 'model' => 'Fendt']);
        Machine::create(['name' => '800 Vario MY21', 'model' => 'Fendt']);
        Machine::create(['name' => '800 Vario', 'model' => 'Fendt']);
        Machine::create(['name' => '700 Vario MT', 'model' => 'Fendt']);
        Machine::create(['name' => '700 Vario MY21', 'model' => 'Fendt']);
        Machine::create(['name' => '700 Vario', 'model' => 'Fendt']);
        Machine::create(['name' => '600 Vario MT', 'model' => 'Fendt']);
        Machine::create(['name' => '600 Vario MY21', 'model' => 'Fendt']);
        Machine::create(['name' => '600 Vario', 'model' => 'Fendt']);
    }
}
