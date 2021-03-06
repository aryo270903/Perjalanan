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


Route::get("/login", "AuthController@login")->name('login');
Route::post("/postlogin", "AuthController@postlogin");
Route::get("/logout", "AuthController@logout");
Route::get("/register", "AuthController@register");
Route::post("/postregister", "AuthController@postregister");

Route::group(['middleware' => ['auth', 'revalidate']], function () {
    Route::get('/home', function () {
        return view('dashboard.home');
    })->name('home');

    Route::get('/', function () {
        return view('layouts.app');
    });

    Route::resource("/perjalanan", "PeralananController");

   
    Route::get('/profil/edit/{id}', 'ProfilController@edit');
    Route::put('/profil/update/{id}', 'ProfilController@update');

});

Route::group(['middleware' => ['auth', 'role:admin','revalidate']], function () {
    Route::get('/profil', 'ProfilController@index');
    Route::get('/pdf', 'ProfilController@cetak_pdf')->name('print');

});