<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register");
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|unique:users',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string|confirmed',
                'password_confirmation' => 'required|string',
            ]);

            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->role = 'customer';
            $user->save();

            return redirect('/home')->with('success', 'User registered');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            Log::error('Error registering user: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }
}
