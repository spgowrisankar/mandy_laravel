<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Getting data from URL
// Route::get('/sample/{id}', function ($id) {
//     echo $id;
//     return view('sample');
// });

// get Request function
// Route::get('/sample', function () {
//     return view('sample');
// });

// Route redirect method
// Route::redirect('/', 'sample');

// Accessing Controller
// Route::get('users', 'Users@index');
// Route::get('show/{id}', 'Users@show');
Route::get('users', 'Users@index');
Route::view('sample', 'sample',['name'=>'tommy','age'=> 20]);
