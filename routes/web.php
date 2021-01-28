<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
// $resp = Http::get('http://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita');
// dd($resp->headers());


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

// Route::get('/cache', function () {
//     return Cache::get('key');
// });

Route::get('/sample/{id}', function ($id) {
    echo $id;
    return view('sample');
});
// Route::get('/code', function() {
//     return view('code');
// });

Route::get('/code', 'CodeController@coder');
// Route::get('/wow', function(){
//     $url = route('admin.wow');
//     return "This URL is:". $url;
// })->name('admin.wow');
// Without Parameter
// Route::get('/wow/{val?}',function ($val = null) {
//     echo $val;
//     return view('wow');
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
Route::get('users', 'Users@index')->middleware('customAuth');
// Route::view('sample', 'sample',['name'=>'tommy','age'=> 30, 'role'=>'developer']);

Route::get('/test', function() {
    return view('test',[
        'info' => 'Passing Parameter via Route using component'
    ]);
});
// Route::view('test','test');
Route::view('user', 'user');
Route::post('usercontroller', 'Usercontroller@account');
// Route::any('usercontroller', 'Usercontroller@account');
Route::group(['middleware'=>['customAuth']], function(){

    Route::view('sample', 'sample',['name'=>'tommy','age'=> 30, 'role'=>'developer']);
});
Route::view('noaccess','noaccess');

Route::get('profiles','Profiles@list');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/error/{value}', 'ErrorController@index');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/exe','TestController@index');

// dd(app()->get('hello'));
cache()->get('abc');

// dd(app());


Route::get('/sess', function(){


    return view('sess');
});

Route::get('/logout', function(){
    session()->forget('data');
    return redirect('user');
});
Route::group(['middleware'=>['formAuth']], function(){
    Route::view('sess','sess');

});
