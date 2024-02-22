<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequests;
use App\Models\Company;
use App\Models\Employee;
use Exception;

class RegController extends Controller
{
    public function storeHire(FormRequests $req)
    {

        if ($req->input('option') == "company") {
            $user = Company::select('email')->get();
            foreach ($user as $u) {
                if ($u->email === $req->input("email")) {
                    return redirect()->back()->with('create_failed', 'Registration Failed! Email already Exists');
                }
            }
            $user = new Company();
        } else {
            $user = Employee::select('email')->get();
            foreach ($user as $u) {
                if ($u->email === $req->input("email")) {
                    return redirect()->back()->with('create_failed', 'Registration Failed! Email already Exists');
                }
            }
            $user = new Employee();
        }

        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = md5($req->input('password'));

        $logoName = time() . "." . $req->file('logo')->extension();
        $user->pic = $logoName;
        $req->file('logo')->move('uploads/', $logoName);

        try {
            $user->save();
            return redirect()->back()->with('create_success', 'Account created successfully');
        } catch (Exception) {
            return redirect()->back()->with('create_failed', 'Sorry, Registration Failed! Try again later.');
        }
    }
}
