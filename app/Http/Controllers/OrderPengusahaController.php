<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderPengusahaController extends Controller
{
    public function index()
    {
        return view("/pengusaha/orderPengusaha");
    }
}
