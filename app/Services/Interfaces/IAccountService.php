<?php
namespace App\Services\Interfaces;
use Illuminate\Http\Request;

interface IAccountService {
    public function register(array $data):array;
    public function forgotPassword($email,$newPassword);
    public function validateForgotPasswordToken(Request $request);
    public function updateInformation();
}
