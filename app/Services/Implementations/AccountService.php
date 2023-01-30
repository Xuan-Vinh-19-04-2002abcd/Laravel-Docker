<?php
namespace App\Services\Implementations;

use App\Models\User;
use App\Repositories\Interfaces\IUserRepository;
use App\Services\Interfaces\IAccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AccountService implements  IAccountService {
    
    public function __construct(
        private readonly IUserRepository $userRepository
    )
    {}

    public function register(array $data): array
      {
        $array_avatar = [
          "https://www.google.com/imgres?imgurl=https%3A%2F%2Fjonnyalien.com%2Fwp-content%2Fuploads%2F2021%2F04%2Fbong-da-phui-4-min.jpg&imgrefurl=https%3A%2F%2Fjonnyalien.com%2Fbong-da-phui-la-gi%2F&tbnid=e-KKixV4_tUbxM&vet=12ahUKEwj_09eahrz8AhUuyKACHSf0BvUQMygfegUIARD1AQ..i&docid=x-lWBC5fYnrcyM&w=700&h=818&q=avatar%20b%C3%B3ng%20%C4%91%C3%A1%20ph%E1%BB%A7i&ved=2ahUKEwj_09eahrz8AhUuyKACHSf0BvUQMygfegUIARD1AQ",
          "https://www.google.com/imgres?imgurl=https%3A%2F%2Fbulbal.vn%2Fwp-content%2Fuploads%2F2022%2F06%2Flogo-bong-da-phui-chat-doc-nhat-2022-3-1024x1024.jpg&imgrefurl=https%3A%2F%2Fbulbal.vn%2Fblogs%2Fnews%2Flogo-bong-da-phui-chat-va-doc-nhat-2022%25EF%25BF%25BC&tbnid=aOwxI1Hj7zLmHM&vet=12ahUKEwj_09eahrz8AhUuyKACHSf0BvUQMygiegUIARD7AQ..i&docid=C76aGqGk6unb6M&w=1024&h=1024&q=avatar%20b%C3%B3ng%20%C4%91%C3%A1%20ph%E1%BB%A7i&ved=2ahUKEwj_09eahrz8AhUuyKACHSf0BvUQMygiegUIARD7AQ",
          "https://www.google.com/imgres?imgurl=https%3A%2F%2Fttagencyads.com%2Fwp-content%2Fuploads%2F2021%2F06%2Fmau-logo-bong-da-4-1-1.png&imgrefurl=https%3A%2F%2Fttagencyads.com%2Fthiet-ke-logo-bong-da-doi-bong%2F&tbnid=4TDMnZNwUiLt_M&vet=12ahUKEwj_09eahrz8AhUuyKACHSf0BvUQMyhQegQIARB7..i&docid=bTCKU5NSFvNjwM&w=800&h=500&q=avatar%20b%C3%B3ng%20%C4%91%C3%A1%20ph%E1%BB%A7i&ved=2ahUKEwj_09eahrz8AhUuyKACHSf0BvUQMyhQegQIARB7",
          "https://www.google.com/imgres?imgurl=https%3A%2F%2Fmyleague.vn%2Fuploadfiles%2Fleagues%2Favatar%2F851533a002c2607d6bfa5061e39d0681.png&imgrefurl=https%3A%2F%2Fmyleague.vn%2Fleague%2F2746%2Fdashboard&tbnid=Ih2sa73DuACKtM&vet=12ahUKEwj_09eahrz8AhUuyKACHSf0BvUQMyhVegUIARCFAQ..i&docid=PE91PlTKOHYkzM&w=250&h=250&itg=1&q=avatar%20b%C3%B3ng%20%C4%91%C3%A1%20ph%E1%BB%A7i&ved=2ahUKEwj_09eahrz8AhUuyKACHSf0BvUQMyhVegUIARCFAQ",
          "https://www.google.com/imgres?imgurl=https%3A%2F%2Fephoto360.com%2Fuploads%2Fworigin%2F2020%2F08%2F28%2Ftaologobongdaonline_26ff7.jpg&imgrefurl=https%3A%2F%2Fephoto360.com%2Ftao-logo-bong-da-hinh-tron-truc-tuyen-689.html&tbnid=hcoAoCQQZUPFOM&vet=10CBIQMyhwahcKEwi4ws3ghrz8AhUAAAAAHQAAAAAQAg..i&docid=CJY5LkWy5yeSLM&w=900&h=900&q=avatar%20b%C3%B3ng%20%C4%91%C3%A1%20ph%E1%BB%A7i&ved=0CBIQMyhwahcKEwi4ws3ghrz8AhUAAAAAHQAAAAAQAg",
          "https://www.google.com/imgres?imgurl=https%3A%2F%2Fephoto360.com%2Fuploads%2Feffect-data%2Fephoto360.com%2F5e8cee199%2Ft5f4878142e887.jpg&imgrefurl=https%3A%2F%2Fephoto360.com%2Ftao-logo-bong-da-hinh-tron-truc-tuyen-689.html&tbnid=enPrXCEYRPv1zM&vet=10CEoQMyiJAWoXChMIuMLN4Ia8_AIVAAAAAB0AAAAAEAI..i&docid=CJY5LkWy5yeSLM&w=900&h=900&q=avatar%20b%C3%B3ng%20%C4%91%C3%A1%20ph%E1%BB%A7i&ved=0CEoQMyiJAWoXChMIuMLN4Ia8_AIVAAAAAB0AAAAAEAI",
          "https://www.google.com/imgres?imgurl=https%3A%2F%2Fmyleague.vn%2Fuploadfiles%2Fleagues%2Favatar%2F4aeb13c522f8a5069fd06da41c387536.png&imgrefurl=https%3A%2F%2Fmyleague.vn%2Fleague%3Fpage%3D3&tbnid=iaAFLpIv1j7JnM&vet=10CKkBEDMosgFqFwoTCLjCzeCGvPwCFQAAAAAdAAAAABAC..i&docid=d9VGnn301fyYQM&w=250&h=250&q=avatar%20b%C3%B3ng%20%C4%91%C3%A1%20ph%E1%BB%A7i&ved=0CKkBEDMosgFqFwoTCLjCzeCGvPwCFQAAAAAdAAAAABAC"
      ];
        $randomUrl = $array_avatar[rand(0,6)];
        $data["avatar"] = $randomUrl;
        $password = Hash::make($data['password']);
        $data['password'] = $password;

        $this->userRepository->create($data);

        return ['fullName' => $data['fullname'], 'email' => $data['email']];
      }
      public function forgotPassword($email,$newPassword)
      {

        $isExit = User::select("*")->where('email', $email)->exists();
        if($isExit){
            $newPassword = Hash::make($newPassword);
            User::where('email', $email)->update(['password' => $newPassword]);
            $user =User::where('email', $email)->first();
            return $user;
          }
        return "fail";

      }
      public function validateForgotPasswordToken(Request $request)
      {
          // TODO: Implement validateForgotPasswordToken() method.
      }

      public function  updateInformation()
      {
          // TODO: Implement updateInformation() method.
      }
}
