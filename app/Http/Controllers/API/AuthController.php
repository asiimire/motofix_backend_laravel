<?php

namespace App\Http\Controllers\API;

use App\Services\AuthService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(Request $request)
    {
        return $this->authService->register($request);
    }

    public function login(Request $request)
    {
        return $this->authService->login($request);
    }
}
