<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:4|max:32',
            'username' => 'required|string|min:4|max:12|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|email|unique:users'
        ];
    }
}
