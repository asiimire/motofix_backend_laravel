<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelStation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location']; // fields that can be mass-assigned

    // Define relationship with FuelType
    public function fuelTypes()
    {
        return $this->hasMany(FuelType::class);
    }
}
