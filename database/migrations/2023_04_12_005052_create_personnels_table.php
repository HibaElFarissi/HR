<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{


    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string ('CIN');
            $table->string ('Nom');
            $table->string ('Prenom');
            $table->string ('Sexe');
            $table->date ('Date_Naissance');
            $table->integer ('Téléphone');
            $table->string ('Email');
            $table->string ('Adresse');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('personnels');
    }
}
