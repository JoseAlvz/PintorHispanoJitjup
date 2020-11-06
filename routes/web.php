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
Route::get('/Diegorivera', [
    'uses'=>'PruebasController@Diegorivera',
    'as'=>'DiegoRiv'] );

Route::get('/plantilla', [
    'uses'=>'PruebasController@plantilla',
    'as'=>'plantilla'] );

Route::get('/Fridakahlo', [
    'uses'=>'PruebasController@Fridakahlo',
    'as'=>'Fridakah'] );

Route::get('/Caravaggio', [
    'uses'=>'PruebasController@Caravaggio',
    'as'=>'CaraVag'] );
Route::get('/Goya', [
    'uses'=>'PruebasController@Goya',
    'as'=>'Goya'] );
Route::get('/Rembrandt', [
    'uses'=>'PruebasController@Rembrandt',
    'as'=>'Rembra'] );
    