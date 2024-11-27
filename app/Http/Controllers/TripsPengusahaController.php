<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripsPengusahaController extends Controller
{
    public function index()
    {
        return view("/pengusaha/tripsPengusaha");
    }
}
