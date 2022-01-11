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


Route::get('/impbill',function(){
    return view('impbill');
});

Route::post('/save_impbill', 'App\Http\Controllers\Nhapkho\ImpbillController@savebill');

Route::get('/expbill',function(){
    return view('expbill');
});
Route::post('/save_expbill', 'App\Http\Controllers\Xuatkho\ExpbillController@savebill');

Route::get('/Thongbao',function(){
    return view('Thongbao');
});

Route::get('/Error',function(){
    return view('Error');
});

Route::get('/thongkenhapkho',function(){
    return view('thongke');
});

Route::post('/ket_qua', 'App\Http\Controllers\Thongke\ThongkeNhapkhoController@ketqua');


Route::get('/thongkexuatkho',function(){
    return view('thongke_xuatkho');
});

Route::post('/ket_qua_xuat_kho', 'App\Http\Controllers\Thongke\ThongkeXuatkhoController@ketqua');

