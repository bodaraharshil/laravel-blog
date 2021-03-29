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

Route::get('/hello/{id}', function ($id) {
    return view('hello',["id" => $id]);
});

/**youtube**/
Route::get('/youtube/{id}',"Youtube@index");

/***mobiles***/
Route::view("/mobile","Mobile");
// Route::get('/mobile', function () {
//     return view('Mobile');
// });

Route::redirect('/here',"/");