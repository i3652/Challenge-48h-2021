<?php

use Illuminate\Support\Facades\Route;
use App\Models\Image as Image;

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

// Les routes permettent de faire le lien entre les vues et les fonctions situées dans les controlleurs.

Route::get('/', function () { // redirection automatique vers la page de connexion lors de l'entrée au site
    return view('/connexion');
});

Route::get('/home', '\App\Http\Controllers\HomeController@home');

Route::get('/connexion', '\App\Http\Controllers\AdminController@showConnexion');

Route::post('/connexion', '\App\Http\Controllers\AdminController@connexion')->name('connexion.connexion');
// On renomme le lien vers la fonction du controller afin de simplifier le code dans la vue associée.

Route::get('/inscription', '\App\Http\Controllers\AdminController@showInscription');

Route::post('/inscription', '\App\Http\Controllers\AdminController@inscription')->name('inscription.inscription');

Route::get('/ajoutImage', '\App\Http\Controllers\ImageController@showAdd');

Route::post('/ajoutImage', '\App\Http\Controllers\ImageController@addImage')->name('ajoutImage.addImage');

Route::get('/image', '\App\Http\Controllers\ImageController@showImage');

Route::any('/search', function(){
    $select = Input::get('select');
    $image = Image::where('url_image', 'LIKE', '%'.$select.'%')->get();
    if(count($image) > 0){
        return view('home')->withDetails($image)->withQuery($select);
    }
    else{
    return view('home')->withMessage('Pas de résultat correspondant');
    }
});
