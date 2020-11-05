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
    return view('Welcome Page');
});

Route::get ('SignUp/', function (){
    return view ('Sign Up');
});

Route::get ('LogIn/', function (){
    return view ('Log In');
});

Route::get ('about/', function (){
    return view ('About us');
});

Route::get ('show/', function (){
    return view ('video');
});

Route::get ('new/', function (){
    return view ('Update info');
});

Route::get ('Landing/{id}','App\Http\Controllers\StudentController@landing');
Route::get ('profile/{id}','App\Http\Controllers\StudentController@profile');

Route::resource('Student', 'App\Http\Controllers\StudentController');

