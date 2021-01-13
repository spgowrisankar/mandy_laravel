<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeController extends Controller
{
    //
    function coder(){
        $val = [
            'name'=>'Gowrisankar',
            'age' => 21,
            'email'=> 'spgowrisankar@gmail.com'
            ];
        return view('/code', ['data'=>$val]);
    }
}
