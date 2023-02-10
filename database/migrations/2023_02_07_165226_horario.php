<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pessoal_clinico_id');
            $table->uuid('pessoal_administrativo_id');
            $table->enum('estado',['Disponivel','Indisponivel']);
            $table->enum('tipo',['exame','consulta']);


            $table->foreign('pessoal_clinico_id')->references('id')->on('pessoal_clinicos');
            $table->foreign('pessoal_administrativo_id')->references('id')->on('pessoal_clinicos');
            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
