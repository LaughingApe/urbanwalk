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
    return view('main');
});


Route::get('/lv/visvalza-iela', function () {
    return view('visvalza');
});

Route::get('/lv/ebu-iela', function () {
    return view('ebu');
});

Route::get('/lv/upisa-pasaza', function () {
    return view('upisa');
});

Route::get('/lv/cakmarijas-iela', function () {
    return view('cakmarijas');
});

Route::get('/lv/dzirnavu-iela', function () {
    return view('dzirnavu');
});

Route::get('/lv/barona-iela', function () {
    return view('barona');
});

Route::get('/lv/vermanes-darzs', function () {
    return view('vermanes');
});
