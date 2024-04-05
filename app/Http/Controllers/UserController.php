<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $userInput = $request->validate([
           'name' => ['required', 'min:4', 'max:32'],
           'username' => ['required', 'min:4', 'max:12', Rule::unique('users', 'username')],
           'password' => ['required', 'min:6', 'confirmed'],
           'email' => ['required', Rule::unique('users', 'email')]
        ]);
        User::create($userInput);

        return 'Thank you for registering!';
    }
}
