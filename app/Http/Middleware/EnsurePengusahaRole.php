<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsurePengusahaRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah pengguna sudah login dan memiliki role 'pengusaha'
        if (Auth::check() && Auth::user()->role === 'pengusaha') {
            return $next($request); // Lanjutkan request ke halaman pengusaha
        }

        // Jika bukan pengusaha, alihkan ke halaman lain atau home
        return redirect('/login')->with('error', 'You must be a pengusaha to access this page.');
    }
}
