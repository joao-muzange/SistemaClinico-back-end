<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->string('filiacao')->nullable();
            $table->string('numero_bi')->unique();
            $table->string('residencia')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('provincia')->nullable();
            $table->date('emissao_bi')->nullable();
            $table->float('altura', 2)->nullable();
            $table->date('validade_bi')->nullable();
            $table->enum('sexo',['M','F']);
            $table->enum('estado_civil',['casado(a)','solteiro(a)','divorciado(a)','viuvo(a)'])->nullable();
            $table->date('data_nascimento')->nullable();
            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
};
