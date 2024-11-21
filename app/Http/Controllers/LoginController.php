<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();

            if ($user && $user->role === 'admin') {
                return redirect('/admin/dashboard');
            } elseif ($user && $user->role === 'pengusaha') {
                return redirect('/');
            } else {
                return redirect('/home');
            }
        }
        return back();
    }
}
