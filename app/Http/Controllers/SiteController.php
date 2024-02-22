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
        if(session()->has('email') && session()->has('name') && session()->has('type')){
            return redirect(url('/'));
        }
        return view('login');
    }
}
