<?php

namespace App\Services;

use App\Models\FuelRefill;
use App\Models\FuelType;
use Illuminate\Http\Request;

class FuelRefillService
{
    public function createFuelRefill(Request $request)
{
    $validated = $request->validate([
        'customer_id' => 'required|exists:customers,id',
        'fuel_type_id' => 'required|exists:fuel_types,id', // Ensures ID exists
        'no_of_litres' => 'required|numeric',
        'total_price' => 'required|numeric',
        'delivery_location' => 'required|string',
        'delivery_status' => 'required|string',
        'delivery_fee' => 'required|numeric',
    ]);

    // If you need to ensure the fuel type exists (alternative approach)
    $fuelType = FuelType::firstOrCreate(
        ['id' => $validated['fuel_type_id']], // Search by ID
        [ // Default values if creating (shouldn't happen due to validation)
            'name' => 'Unspecified Fuel',
            'price_per_litre' => 0,
            'fuel_station_id' => 1 
        ]
    );

    $fuelRefill = FuelRefill::create($validated);

    return response()->json([
        'message' => 'Fuel refill created successfully',
        'data' => $fuelRefill
    ], 201);
}
}
