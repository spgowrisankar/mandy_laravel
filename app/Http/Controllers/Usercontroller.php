<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    function account(Request $req) {
        return $req->input();
    }
}
