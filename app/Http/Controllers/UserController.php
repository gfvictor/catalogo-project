<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        $userInput = $request->validate([
           'name' => 'required|min:4|max:32',
           'username' => 'required|min:4|max:12|unique:users',
           'password' => 'required|min:6|confirmed',
           'email' => 'required|email|unique:users'
        ]);
        User::create($userInput);

        return redirect('/')->with('success', 'Obrigado por se registrar!');
    }
}
