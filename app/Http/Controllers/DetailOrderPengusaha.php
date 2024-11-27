<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailOrderPengusaha extends Controller
{
    public function index()
    {
        return view("/pengusaha/detailorderpengusaha");
    }
}
