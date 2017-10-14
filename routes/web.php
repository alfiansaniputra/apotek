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

Route::resource('apotik/', 'IndexController');
Route::resource('apotik/detail', 'DetailController');
Route::resource('apotik/resep', 'ResepController');
Route::resource('apotik/obat', 'ObatController');
Route::resource('apotik/pasien', 'PasienController');
Route::resource('apotik/poliklinik', 'PoliklinikController');