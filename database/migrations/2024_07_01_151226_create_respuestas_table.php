<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->integer('idP1');
            $table->integer('idP2');
            $table->integer('idP3');
            $table->integer('idP4');
            $table->integer('idP5');
            $table->integer('idP6');
            $table->integer('idP7');
            $table->integer('idP8');
            $table->integer('idP9');
            $table->integer('idP10');
            $table->string('carrera_sugerida')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
