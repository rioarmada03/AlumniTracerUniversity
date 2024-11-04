<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     * 
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // Jika peran tidak sesuai, redirect ke halaman lain atau tampilkan pesan kesalahan
        return redirect('/')->with('error', 'You do not have access to this page.');
    }
}
