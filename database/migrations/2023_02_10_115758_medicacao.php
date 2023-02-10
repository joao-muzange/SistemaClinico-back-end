<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('medicacoes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('receita_id');
            $table->string('item');
            $table->integer('horario');

            $table->foreign('receita_id')->references('id')->on('receitas');            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('medicacoes');
    }

};
