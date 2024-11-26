<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananTripController extends Controller
{
    public function index()
    {
        return view("tripspemesanan");
    }
}
