<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    protected $errorBag = 'register';
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'      => ['bail', 'required', 'string'],
            'email'     => ['bail', 'required', 'email', 'unique:App\Models\User,email'],
            'password'  => ['bail', 'required', 'string', 'min:6', 'confirmed'],
        ];
    }
}
