<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\Interfaces\IAccountService;
use App\Services\Interfaces\IMailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function __construct(
        private readonly IAccountService $accountService,
        private readonly IMailService $mailService
    ) {}
    public function register(RegisterRequest $request){

        $user = $request->validated();

        $accData = $this->accountService->register((array)$user);
        
        return response()->json([
            "message" => 'Create Successfully',
            "data" => $accData
        ],201);


        
    }

    public function fogotPassword(Request $request){

        $email = $request->input('email');
        $newPassword = $request->input('newpassword');

        $user = $this->accountService->forgotPassword($email, $newPassword);
        
        if($user!="fail"){
            $user->password = $newPassword;
            $this->mailService->sendMail($user);
            return response()->json([
                "message" => 'Change password Successfully',
                "data" => $user
            ],201);
        }
        return response()->json(
            [
                "message" => 'Email not sign up'
            ],
            203
        );
    }
}
