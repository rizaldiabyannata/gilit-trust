<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Log::info('User logged in: ' . Auth::user()->email);

            return redirect()->intended('/home')->with('success', 'Login successful!');
        }

        Log::warning('Login failed for email: ' . $request->input('email'));

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
