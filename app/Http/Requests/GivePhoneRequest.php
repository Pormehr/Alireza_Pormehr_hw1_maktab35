<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GivePhoneRequest extends FormRequest
{
    protected $errorBag = 'givePhone';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'phone' => ['bail', 'required', 'string', 'min:11', 'starts_with:09'],
        ];
    }
}
