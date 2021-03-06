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
    return view('login');
});
Route::get('/front','Users@front');
Route::get('/about','Users@about');
Route::get('/list','Users@list');
Route::get('/create','Users@create');
Route::get('/links','Users@links');
Route::post('/loginsubmit','Users@loginsubmit');
Route::post('/createsubmit','Users@createsubmit');

