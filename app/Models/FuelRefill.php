<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelRefill extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'fuel_type_id',
        'no_of_litres',
        'total_price',
        'delivery_location',
        'delivery_status',
        'delivery_fee',
    ];

    // Define relationship with FuelType
    public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }
    // Define relationship with Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
