<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price_per_litre', 'fuel_station_id'];

    // Define relationship with FuelStation
    public function fuelStation()
    {
        return $this->
    }
}
