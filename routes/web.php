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


Route::get('/impbill', 'App\Http\Controllers\ImpbillController@getForm');
Route::post('/save_impbill', 'App\Http\Controllers\ImpbillController@savebill');

Route::get('/expbill', 'App\Http\Controllers\ExpbillController@getForm');
Route::post('/save_expbill', 'App\Http\Controllers\ExpbillController@savebill');

