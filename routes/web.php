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

Route::get('/test-grid','FEController@grid');
Route::get('/test-flex','FEController@flex');

Route::get('/annual-leaves','BEController@list_cuti');
Route::post('/annual-leaves','BEController@create_cuti');
Roite::get('/annual-leaves/{id}','BEController@list_cuti');
