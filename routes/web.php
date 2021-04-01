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

Route::get('/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('welcome');
});

Route::get('/hello/{id}', function ($id) {
    return view('hello',["id" => $id]);
});

/**youtube**/
// Route::get('/youtube/{id}',"Youtube@index");
Route::get('/youtube',"Youtube@index");

/***mobiles***/
Route::view("/mobile","Mobile");
// Route::get('/mobile', function () {
//     return view('Mobile');
// });

Route::redirect('/here',"/");

/***submit form****/
// Route::view('/user',"User")->middleware('indian');
// Route::post('/userdata',"Users@submit");

Route::get('/user',"Users@index");


Route::get('db','Users@dbCheck');

/***pagination company****/
Route::get('/list','Companies@list');