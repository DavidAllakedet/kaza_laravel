<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipementLogementTable extends Migration
{
    public function up()
    {
        Schema::create('equipement_logement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipement_id')->constrained()->onDelete('cascade');
            $table->foreignId('logement_id')->constrained()->onDelete('cascade');
            // Add any additional columns if needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipement_logement');
    }
}
