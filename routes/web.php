<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  
    return view('welcome');
});

Route::get('/ghz', function () {

    $array_nama = ["thor", "haikal", "abdur"];
    return view('univ.ghz')->with('ghz',$array_nama);
});

Route::get('/admin', function () {

return view('univ.dashboard');
});

Route::get('/admin2', function () {

return view('layout.top-nav');
});