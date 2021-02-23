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

        $url = "https://cloudinary.com/console/c-4dada9593e24a0e5bcc5f6c71ee63a/media_library/asset/image%2Fupload%2Fsamples%2Fanimals%2Fkitten-playing/transform";

        //dd(request());
        echo(cloudinary()->upload(request()->file('file')));
        // ->getRealPath()->getSecurePath()
        echo("Vous êtez bien connecté");
        /*$image = Image::create([
            'url_image' => cloudinary()->upload(request()->file('file'))->getRealPath()->getSecurePath(),
            'title' =>request('title'),
            'tag' =>request('tag'),
        ]);*/

        return redirect('/home');
    }
}
