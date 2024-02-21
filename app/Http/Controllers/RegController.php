<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequests;
use App\Models\Company;
use App\Models\Employee;

class RegController extends Controller
{
    //
    public function storeHire(FormRequests $req) {
        if ($req->input('option') == "company"){
            $user = new Company();
        } else{
            $user = new Employee();
        }
        
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = md5($req->input('password'));
        
        $logoName = time() . "." .$req->file('logo')->extension();
        $user->pic = $logoName;
        $req->file('logo')->storeAs('public/uploads', $logoName);

        if($user->save()){
            return back()->with('create_success', 'Account created successfully');
        }else{
            return back()->with('create_failed', 'Sorry, Account Can not created! Try again later.');
        }

    }
}
