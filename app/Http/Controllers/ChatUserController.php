<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatUserController extends Controller
{
    public function index()
    {
        return view("/chatUser");
    }
}
