<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            FuelStationSeeder::class,
            FuelTypeSeeder::class,
            CustomerSeeder::class,
            // Add other seeders here
        ]);
    }
}