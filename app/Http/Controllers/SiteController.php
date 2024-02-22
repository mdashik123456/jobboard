<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

class SiteController extends Controller
{
    public function registration()
    {
        return view('register');
    }

    public function login()
    {
        if(session()->has('id') && session()->has('type')){
            return redirect(url('/'));
        }
        return view('login');
    }
    public function profile()
    {
        if(!session()->has('id') && !session()->has('type')){
            return redirect(url('/login'));
        }

        if(session('type') === 'company'){
            $users = Company::find(session('id'));
        }else{
            $users = Employee::find(session('id'));
        }
        $data = compact( 'users' );
        return view("profile", $data);
    }
}
