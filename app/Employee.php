<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    // public $timestamps = false;
    function myCompany() {
        return $this->hasMany(Company::class,'employee_id','id');
    }
}
