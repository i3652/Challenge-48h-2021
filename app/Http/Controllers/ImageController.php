<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image as Image;

class ImageController extends Controller
{
    public function showAdd(){ // Fonction permettant d'afficher la page d'ajout d'une ou plusieurs images au serveur
        return view('/ajoutImage');
    }

    public function addImage(){ // Fonction effectuant la requète d'envoi du/des image(s) au serveur.
        request()->validate([
            'title' =>['required'],
            'tag' =>['max:100'], // Ici,  le tag n'étant pas obligatoire, on change la condition à une limite maximale de charactères
        ]);

        $image = Image::create([
            'url_image' => cloudinary()->upload(request()->file('file'))->getRealPath()->gerSecuredPath(),
            'title' =>request('title'),
            'tag' =>request('tag'),
        ]);

        return redirect('/home');
    }
}
