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
    return view('lv.main');
});

Route::get('/lv', function () {
    return view('lv.main');
});


Route::get('/lv/visvalza-iela', function () {
    return view('lv.visvalza');
});

Route::get('/lv/ebu-iela', function () {
    return view('lv.ebu');
});

Route::get('/lv/upisa-pasaza', function () {
    return view('lv.upisa');
});

Route::get('/lv/cakmarijas-iela', function () {
    return view('lv.cakmarijas');
});

Route::get('/lv/dzirnavu-iela', function () {
    return view('lv.dzirnavu');
});

Route::get('/lv/barona-iela', function () {
    return view('lv.barona');
});

Route::get('/lv/vermanes-darzs', function () {
    return view('lv.vermanes');
});


Route::get('/en', function () {
    return view('en.main');
});


Route::get('/en/visvalza-iela', function () {
    return view('en.visvalza');
});

Route::get('/en/ebu-iela', function () {
    return view('en.ebu');
});

Route::get('/en/upisa-pasaza', function () {
    return view('en.upisa');
});

Route::get('/en/cakmarijas-iela', function () {
    return view('en.cakmarijas');
});

Route::get('/en/dzirnavu-iela', function () {
    return view('en.dzirnavu');
});

Route::get('/en/barona-iela', function () {
    return view('en.barona');
});

Route::get('/en/vermanes-darzs', function () {
    return view('en.vermanes');
});
