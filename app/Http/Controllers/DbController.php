<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    //
    public function index() {
        // To find count
        // $data = DB::table('employee')->count();
        $data = DB::table('employees')->get();
        return view('connection', ['data'=>$data]);
    }
}
