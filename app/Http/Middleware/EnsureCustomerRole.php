<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureCustomerRole
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
        // Memeriksa apakah pengguna sudah login dan memiliki role 'customer'
        if (Auth::check() && Auth::user()->role === 'customer') {
            return $next($request); // Lanjutkan request ke halaman home
        }

        // Jika bukan customer, alihkan ke halaman admin atau halaman lain yang sesuai
        return redirect('/login')->with('error', 'You must be a customer to access this page.');
    }
}
