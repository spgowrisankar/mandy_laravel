<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class DeveloperController extends Controller
{
    //
    public function index() {
        return Company::all();
    }
}
