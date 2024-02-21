<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequests;

class RegController extends Controller
{
    //
    public function storeHire(FormRequests $req) {
        
        return back()->with('create_success', 'Account created successfully');
    }
}
