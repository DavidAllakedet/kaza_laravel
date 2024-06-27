<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('logement_id')->constrained()->onDelete('cascade');
            $table->string('url'); // Colonne pour l'URL de l'image
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
