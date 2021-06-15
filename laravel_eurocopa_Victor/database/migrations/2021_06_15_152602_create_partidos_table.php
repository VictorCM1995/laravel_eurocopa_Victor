<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("pais1_id");
            $table->foreign("pais1_id")->references("id")->on("paises");
            $table->foreignId("pais2_id");
            $table->foreign("pais2_id")->references("id")->on("paises");
            $table->integer("goles_pais1");
            $table->integer("goles_pais2");
            $table->boolean("disputado");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
}
