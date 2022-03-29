<?php

use App\Http\Controllers\KotaController;
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
Route::get('/home', function () {
    return view('dashboard.home');
});

Route::get('/', function () {
    return view('layouts.app');
});

Route::get("/login","AuthController@login");
Route::post("/postlogin","AuthController@postlogin");
Route::get("/logout","AuthController@logout");
Route::get("/register","AuthController@register");
Route::post("/postregister","AuthController@postregister");

Route::resource("/perjalanan","PeralananController");

Route::get('/profil','ProfilController@index');
Route::get('/profil/edit/{id}', 'ProfilController@edit');
Route::put('/profil/update/{id}','ProfilController@update');
Route::get('/pdf', 'ProfilController@cetak_pdf')->name('print');