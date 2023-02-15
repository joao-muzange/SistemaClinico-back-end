<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('utentes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('utilizador_id')->unique();
            $table->string('filiacao')->nullable();
            $table->string('numero_bi')->unique()->nullable();
            $table->string('residencia')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('provincia')->nullable();
            $table->date('emissao_bi')->nullable();
            $table->float('altura', 2)->nullable();
            $table->date('validade_bi')->nullable();
            $table->enum('sexo',['M','F']);
            $table->enum('estado_civil',['casado(a)','solteiro(a)','divorciado(a)','viuvo(a)'])->nullable();
            $table->date('data_nascimento')->nullable();


            $table->foreign('utilizador_id')->references('id')->on('utilizadores');
            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('utentes');
    }
};
