<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePengusahaController extends Controller
{
    public function index()
    {
        return view("/pengusaha/profilePengusaha");
    }
}
