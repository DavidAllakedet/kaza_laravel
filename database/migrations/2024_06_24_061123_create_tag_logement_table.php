<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagLogementTable extends Migration
{
    public function up()
    {
        Schema::create('tag_logement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('logement_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tag_logement');
    }
}


