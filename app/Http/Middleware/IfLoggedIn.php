<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IfLoggedIn
{
    public function handle(Request $request, Closure $next): Response
    {
       return (Auth::check())
           ? $next($request)
           : abort(401, 'Faça o login!');
    }
}
