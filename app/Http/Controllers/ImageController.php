<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image as Image;

class ImageController extends Controller
{
    public function showAdd(){
        return view('addImage');
    }

    public function addImage(){
        request()->validate([
            'link' =>['required'],
            'title' =>['required'],
            'tag' =>['required'],
        ]);

        $admin = Admin::create([
            'link' =>request('link'),
            'title' =>request('title'),
            'tag' =>request('tag'),
        ]);

        return redirect('/home');
    }
}
