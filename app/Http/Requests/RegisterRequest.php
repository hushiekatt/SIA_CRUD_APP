<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\StrongPassword; // Import the StrongPassword rule

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed', new StrongPassword],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'email' => filter_var($this->email, FILTER_SANITIZE_EMAIL),
            'name' => trim($this->name),
        ]);
    }
}
