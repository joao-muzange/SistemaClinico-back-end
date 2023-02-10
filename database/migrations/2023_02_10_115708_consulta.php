<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('horario_marcacao_id');
            $table->enum('estado',['Concluida','Examinada','Cancelada']);
            $table->dateTime('data');
            $table->text('diagnostico');


            $table->foreign('horario_marcacao_id')->references('id')->on('horario_marcacao');            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
};
