<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact() {
        $data = DB::table('employees')
        ->join('contacts', 'employees.id', '=', 'contacts.id')
        ->select('employees.name', 'contacts.mail')
        ->get();
        return view('contacts', ['data'=>$data]);
    }
}
