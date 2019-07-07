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

// non si possono avere 2 rotte uguali! ogni rotta la sua funzione!
Route::get('/', 'StaticController@index');
Route::get('/privacy-policy','StaticController@privacyPolicy');
