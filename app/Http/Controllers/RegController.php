<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequests;
use App\Models\Company;

class RegController extends Controller
{
    //
    public function storeHire(FormRequests $req) {
        
        $comp = new Company();
        $comp->name = $req->input('company_name');
        $comp->email = $req->input('email');
        $comp->password = md5($req->input('password'));
        
        $logoName = time() . "." .$req->file('logo')->extension();
        $comp->logo = $logoName;
        $req->file('logo')->storeAs('public/uploads', $logoName);

        if($comp->save()){
            return back()->with('create_success', 'Account created successfully');
        }else{
            return back()->with('create_failed', 'Sorry, Account Can not created! Try again later.');
        }

    }
}
