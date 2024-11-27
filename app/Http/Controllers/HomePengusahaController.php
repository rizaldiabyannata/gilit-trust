<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePengusahaController extends Controller
{
    public function index()
    {
        return view("/pengusaha/homepengusaha");
    }
}
