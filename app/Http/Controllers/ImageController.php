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
            'link' =>['required'],
            'title' =>['required'],
            'tag' =>['max:100'],
        ]);

        $admin = Admin::create([
            'link' =>request('link'),
            'title' =>request('title'),
            'tag' =>request('tag'),
        ]);

        return redirect('/home');
    }
}
