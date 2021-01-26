<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //

    public function index($value) {
        if ($value == 'user') {
            return abort(403, 'You are not allow to access this Page!!');
        }
        elseif ($value == 'admin') {
            return $value;
        }
        else {
            return abort(404);
        }
    }
}
