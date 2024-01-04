<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan bahwa pengguna adalah user (bukan admin)
        if (Auth::check() && Auth::user()->level === 'user') {
            return $next($request);
        }

        // Redirect atau berikan respons sesuai kebijakan Anda
        return redirect()->route('login');
    }
}
