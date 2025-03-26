<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FuelRefillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/customers', [AuthController::class, 'customers']);
Route::post('/fuel-refills', [FuelRefillController::class, 'store']);
