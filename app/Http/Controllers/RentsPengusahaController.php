<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentsPengusahaController extends Controller
{
    public function index()
    {
        return view("/pengusaha/rentsPengusaha");
    }
}
