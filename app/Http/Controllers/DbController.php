<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    //
    public function index() {
        $data = DB::table('employee')->get();
        return view('connection', ['data'=>$data]);
    }
}
