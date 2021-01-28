<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    function account(Request $req) {
        // $req->validate([
        //     'email' => 'required | min:3 | max:15',
        //     'password' => 'required'
        // ]);
        // return $req->input();
        $req->session()->put('data', $req->input());
        return redirect('sess');
    }
}
