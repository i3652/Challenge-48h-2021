<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrateur as Admin;
use App\Models\Image as Image;

class DatabaseSeeder extends Seeder
{
    // Création d'échantillons test dans la BDD afin d'effectuer des tests.
    // Détermine l'état initial de la BDD après que l'on lance le seeder

    public function run()
    {
        $img = new Image();
        $img->title = "titre";
        $img->link = "S%MFMGKNnnùg";
        $img->tag = "tag";
        $img->save();

        $admin = new Admin();
        $admin->email = "admin.admin@admin.com";
        $admin->password = "Test1234";
        $admin->save();

    }
}
