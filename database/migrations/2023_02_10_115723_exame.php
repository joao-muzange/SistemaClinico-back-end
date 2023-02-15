<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('exames', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consulta_id');
            $table->uuid('pessoal_clinico_id');
            $table->enum('estado',['Concluida','Cancelada']);
            $table->dateTime('data');
            $table->text('resultado')->nullable();
            $table->dateTime('data_resultado')->nullable();


            $table->foreign('consulta_id')->references('id')->on('consultas');   
            $table->foreign('pessoal_clinico_id')->references('id')->on('pessoal_clinicos');                     
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('exames');
    }
};
