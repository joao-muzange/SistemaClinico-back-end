<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consulta_id');
            $table->integer('tempo_medicacao');
            $table->integer('inicio')->nullable();
            $table->integer('fim')->nullable();

            $table->foreign('consulta_id')->references('id')->on('consultas');            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('receitas');
    }

};
