<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "fullname" => 'required|max:20"',
            "phonenumber" => 'required|numeric|min:10',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'

        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'Name is required',
            'phonenumber.required' => 'Phone number is required',
            'phonenumber.numeric' => 'Umformat Phonenumber',
            'email.required' => 'Email is required',
            'email.unique' => 'Email is duplicate',
            'email.email'=> "Unformat Email",
            'email.max' => "The length have to less 255 characters",
            'password.required' => 'Password Required',
            'password.min' => "Password have to more than 8 characters",
            'password_confirmation.required' => 'Password_Confirmed Required',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => false
          ], 422));
    }   
    
}
