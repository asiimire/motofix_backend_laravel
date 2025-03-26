<?php

namespace Database\Seeders;

use App\Models\FuelType;
use Illuminate\Database\Seeder;

class FuelTypeSeeder extends Seeder
{
    public function run()
    {
        FuelType::create([
            'name' => 'Premium',
            'price_per_litre' => 150.00,
            'fuel_station_id' => 1  // Matches Main Station
        ]);
        
        FuelType::create([
            'name' => 'Regular',
            'price_per_litre' => 130.00,
            'fuel_station_id' => 2  // Matches Downtown Station
        ]);
    }
}