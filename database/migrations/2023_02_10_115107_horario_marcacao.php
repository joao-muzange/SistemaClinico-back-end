<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('horario_marcacoes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('horario_id');
            $table->uuid('utente_id');
            $table->enum('estado',['Marcada','Cancelada','Adiada']);
            $table->dateTime('data');


            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->foreign('utente_id')->references('id')->on('utentes');
            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('horario_marcacoes');
    }

};
