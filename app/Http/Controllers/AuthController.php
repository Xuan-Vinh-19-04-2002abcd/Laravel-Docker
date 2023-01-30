<?php

namespace App\Http\Controllers;

use App\Services\Implementations\AuthService;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthService $authService
    )
    {}
    public function login(LoginRequest $request){
        $data = $request->all();

        $user =$this->authService->login($data);
        $array_user[] = $user; 
        if($user['status'] === true){
            return response()->json([
                "message" => "Login successfully",
                'data' => $array_user
            ]);
        }
        return response()->json([
            "message" => "login fail",
            'data' => $user['status']
        ]);
    }
}
