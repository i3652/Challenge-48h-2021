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
Route::get('/home', '\App\Http\Controllers\HomeController@home');

Route::get('/connexion', '\App\Http\Controllers\AdminController@showConnexion');

Route::post('/connexion', '\App\Http\Controllers\AdminController@connexion')->name('connexion.connexion');

Route::get('/inscription', '\App\Http\Controllers\AdminController@showInscription');

Route::post('/inscription', '\App\Http\Controllers\AdminController@inscription')->name('inscription.inscription');

Route::get('/ajoutImage', '\App\Http\Controllers\ImageController@showAdd');

Route::post('/ajoutImage', '\App\Http\Controllers\ImageController@addImage')->name('ajoutImage.addImage');
