<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function registration()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
