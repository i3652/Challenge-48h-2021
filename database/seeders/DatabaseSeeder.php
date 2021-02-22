<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrateur as Admin;
use App\Models\Image as Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $img = new Image();
        $img->title = "titre";
        $img->link = "S%MFMGKNnnùg";
        $img->tag = "tag";
        $img->save();

        $admin = new Admin();
        $admin->email = "admin.admin@admin.com";
        $admin->password = "rgknZROGNJQO<%N";
        $admin->save();

    }
}
