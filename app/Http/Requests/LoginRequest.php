<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    protected $errorBag = 'login';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password' => ['bail', 'required', 'string', 'min:6']
        ];
    }
}
