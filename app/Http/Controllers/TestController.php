<?php

namespace App\Http\Controllers;

use App\Repositary\UserDataRepositary;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public $users;

    public function __construct(UserDataRepositary $user) {
        $this->users = $user;
    }

    public function index() {
        echo $this->users->save();
    }
}
