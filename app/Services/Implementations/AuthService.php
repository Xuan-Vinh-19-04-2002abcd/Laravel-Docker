<?php
namespace App\Services\Implementations;

use App\Models\User;
use App\Repositories\Interfaces\IUserRepository;
use App\Services\Interfaces\IAccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthService {
    public function __construct(
        private readonly IUserRepository $userRepository
    )
    {}
    public function login($data):array
     {
        $user = User::where("email", $data["email"])->first();

        if($user){
            if(Hash::check($data["password"],$user["password"])){
                return [
                'id' => $user['id'],
                'fullName' => $user['fullname'], 
                'email' => $user['email'],
                "phonenumber" =>$user['phonenumber'],
                "avatar" =>$user['avatar'],
                "status" => true
            ];
            }
            else{
                return ["status" =>"Email or Password wrong"];
            }
        }
        return ["status" => "email not found"];
   
    }

}