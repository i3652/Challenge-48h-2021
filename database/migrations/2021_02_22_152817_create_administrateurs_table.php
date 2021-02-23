<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // Crée la table administrateur lors d'une migration
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id();
            $table->String("email");
            $table->String("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // écrase la table si elle existe déjà afin d'éviter les doublons.
    {
        Schema::dropIfExists('administrateurs');
    }
}
