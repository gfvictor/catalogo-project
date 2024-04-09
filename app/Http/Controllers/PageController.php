<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHomepage()
    {
        return (auth()->check()) ? view('login') : view('homepage');
    }

    public function showRegister()
    {
        return view("registerPage");
    }

    public function showCreateForm()
    {
        return (auth()->check()) ? view('create-form') : view('homepage')->with('failure', 'Faça o login!');
    }

    public function showEditForm(Objects $object_id)
    {
        return (auth()->check() ? view('edit-form', ['object' => $object_id]) : view('homepage')->with('failure', 'Faça o login!'));
    }

    public function login(Request $request)
    {
        $userInput = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required'
        ]);

        return (auth()->attempt([
            'username' => $userInput['loginusername'],
            'password' => $userInput['loginpassword']
        ])) && $request->session()->regenerate() ? redirect('/')->with('success', 'Login bem sucedido!') : 'Login inválido!';
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Logout bem sucedido!');
    }

    public function overview()
    {
        return (auth()->check()) ? view('/overview', ['objects' => Objects::where('user_id', auth()->id())->get()]) : redirect('/')->with('failure', 'Você não tem permissão.');
    }
}