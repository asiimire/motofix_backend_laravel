<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class CustomerService
{
    public function createFuelRefill($data)
    {
        try {
            // Create the fuel refill order
            $customer = Customer::create($data);

            return $customer;
        } catch (\Exception $e) {
            Log::error("Customer Creation Failed: " . $e->getMessage());
            throw new \Exception("Something went wrong while creating the customer.");
        }
    }
}
