<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    //
    function list() {
        $data = Http::get('http://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita')->json();
        return view('profiles',['data'=>$data]);
    }
}
