<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class CompanyController extends Controller
{
    //
    function save(Request $req){
        $emp = Employee::find($req->id);
        // $emp = new Employee;
        $emp->name = $req->name;
        $emp->roles = $req->roles;
        $emp->save();

    }
}
