<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PageController extends Controller
{
    public function showHomepage(): View
    {
        return (Auth::check())
            ? view('login')
            : view('homepage');
    }

    public function showRegister(): View
    {
        return view("register-page");
    }

    public function showCreateForm(): View|HttpException
    {
        return (Auth::check())
            ? view('create-form')
            : abort(401, 'Faca o login!');
    }

    public function showEditForm(Objects $id): View|HttpException
    {
        return (Auth::check() && $id->user_id === Auth::id())
            ? view('edit-form', ['object' => $id])
            : abort(403, 'Você não tem permissão!');
    }

    public function login(Request $request): RedirectResponse|HttpException
    {
        $userInput = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required'
        ]);

        if (Auth::attempt([
            'username' => $userInput['loginusername'],
            'password' => $userInput['loginpassword']
        ])) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login bem sucedido!');
        }

        abort(401, 'Login Inválido!');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logout bem sucedido!');
    }

    public function overview(): View|HttpException
    {
        return (Auth::check())
            ? view('/overview', ['objects' => Objects::where('user_id', Auth::id())->paginate(10)])
            : abort(403, 'Você não tem permissão.');
    }
}