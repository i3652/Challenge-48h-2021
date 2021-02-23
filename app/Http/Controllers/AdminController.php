<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur as Admin;

class AdminController extends Controller
{

    public function showConnexion(){
        return view('/connexion');
    }

    public function connexion(){
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

    public function showInscription(){
        return view('/inscription');
    }

    public function inscription(){
        request()->validate([
            'email' =>['required', 'email'],
            'password' =>['required', 'confirmed', 'min:8'],
            'confirmPassword' =>['required', 'min:8'],
        ]);

        $admin = Admin::create([
            'email' =>request('email'),
            'password' =>request('password'),
            'confirmPassword' =>request('confirmPassword'),
        ]);

        return redirect('/connexion');
    }
}
