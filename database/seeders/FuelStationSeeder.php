<?php

namespace Database\Seeders;

use App\Models\FuelStation;
use Illuminate\Database\Seeder;

class FuelStationSeeder extends Seeder
{
    public function run()
    {
        FuelStation::create([
            'name' => 'Main Station',
            'location' => '123 Main Street, City' // Add this
        ]);
        
        FuelStation::create([
            'name' => 'Downtown Station',
            'location' => '456 Central Ave, City' // Add this
        ]);
    }
}