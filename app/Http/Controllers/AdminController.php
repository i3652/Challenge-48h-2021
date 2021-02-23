<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur as Admin;

class AdminController extends Controller
{

    public function showConnexion(){ // Fonction qui permet l'affichage de la page de connexion (GET)
        return view('/connexion');
    }

    public function connexion(){ // Fonction qui envoie une requète vérifiant la connexion et redirige vers les images du site si réussi (POST)
        request()->validate([
            'email' =>['required', 'email'],
            'password' =>['required', 'min:8'],
        ]);

        $result = auth()->attempt([
            'email' =>request('email'),
            'password' =>request('password'),
        ]);

        if($result){
            return redirect('/home');
        }
    }

    public function showInscription(){ // Fonction qui permet l'affichage de la page d'inscription (GET)
        return view('/inscription');
    }

    public function inscription(){ // Fonction qui envoie une requète afin de créer un compte administrateur et renvoie vers la page de connexion
        request()->validate([
            'email' =>['required', 'email'],
            'password' =>['required', 'confirmed', 'min:8'],
            'password_confirmation' =>['required', 'min:8'],
        ]);

        $admin = Admin::create([
            'email' =>request('email'),
            'password' =>request('password'),
            'password_confirmation' =>request('password_confirmation'),
        ]);

        return redirect('/connexion');
    }
}
