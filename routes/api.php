<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_products/{id}', 'App\Http\Controllers\KhohangController@get_product');
Route::get('/get_sumofquantity/{id}', 'App\Http\Controllers\KhohangController@get_sumofquantity');
Route::get('/get_quantityorder/{id}', 'App\Http\Controllers\KhohangController@get_quantityorder');
Route::get('/get_sumoforder', 'App\Http\Controllers\KhohangController@get_sumoforder');
Route::get('/get_order', 'App\Http\Controllers\KhohangController@get_order');
Route::get('/get_revenue/{id}', 'App\Http\Controllers\KhohangController@get_revenue');
Route::get('/get_order_details/{id}', 'App\Http\Controllers\KhohangController@get_order_details');
Route::get('/get_impbills', 'App\Http\Controllers\KhohangController@get_recvbill');
Route::get('/get_expbills', 'App\Http\Controllers\KhohangController@get_expbill');
Route::get('/get_impbills/{date}', 'App\Http\Controllers\KhohangController@get_recvbillbydate');
Route::get('/get_expbills/{date}', 'App\Http\Controllers\KhohangController@get_expbillbydate');


