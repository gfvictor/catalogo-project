<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHomepage()
    {
        return (auth()->check()) ? view('login') : view( 'homepage');
    }
    public function registerPage()
    {
        return view("registerPage");
    }
    public function login(Request $request)
    {
        $userInput = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required'
        ]);

        return (auth()->attempt([
            'email' => $userInput['loginemail'],
            'password' => $userInput['loginpassword']
        ])) && $request->session()->regenerate() ? redirect('/')->with('success', 'Login bem sucedido!') : 'Login inválido!';
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Logout bem sucedido!');
    }
}
