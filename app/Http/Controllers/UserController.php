<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function register(userRequest $request): RedirectResponse
    {
        User::create($request->validated());

        return redirect('/')->with('success', 'Obrigado por se registrar!');
    }
}
