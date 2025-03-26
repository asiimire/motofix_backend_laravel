<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\FuelRefillService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class FuelRefillController extends Controller
{
    protected $fuelRefillService;

    public function __construct(FuelRefillService $fuelRefillService)
    {
        $this->fuelRefillService = $fuelRefillService;
    }

    public function store(Request $request)
    {
        return $this->fuelRefillService->createFuelRefill($request);
    }
}
