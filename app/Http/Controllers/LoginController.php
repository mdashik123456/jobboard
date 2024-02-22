<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequests;
use App\Models\Company;
use App\Models\Employee;
use Exception;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        try {
            if ($req->input('option') == "company") {
                $users = Company::where('email', '=', $req->input("email"))->where('password', '=', md5($req->input("password")))->first();
            } else {
                $users = Employee::where('email', '=', $req->input("email"))->where('password', '=', md5($req->input("password")))->first();
            }

            // foreach ($users as $user) {
            session([
                'email' => $users->email,
                'name' => $users->name,
                'pic' => $users->pic
            ]);
            // }
            return redirect()->back()->with('success_msg', 'Login Success');
        } catch (Exception) {
            return redirect()->back()->with('error_msg', 'Login Failed');
        }
    }

    public function view_session()
    {
        echo "<pre>";
        echo "Hello: ";
        print_r(session()->all());
        die;
    }
    public function logout()
    {
        session()->forget(['name', 'email', 'pic']);
        // return redirect('/login')->with('success_msg', 'Logged Out!');
        return redirect('/views');
    }
}
