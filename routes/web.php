<?php

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

//Route::get('/', 'TestController@prueba');

// Route::get('/pruebas', function () {
//     return "<h2>Hallo wie gehts?</h2>";
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
