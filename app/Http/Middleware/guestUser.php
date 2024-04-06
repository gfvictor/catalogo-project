<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class guestUser
{
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard)
        {
            if (Auth::guard($guard)->check())
            {
                return redirect('/')->with('failure', 'Você já está logado!');
            }
        }

        return $next($request);
    }
}
