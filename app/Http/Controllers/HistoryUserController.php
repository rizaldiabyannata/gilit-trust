<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryUserController extends Controller
{
    public function index()
    {
        return view("/history");
    }
}
