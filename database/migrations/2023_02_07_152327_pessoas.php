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
            $table->string('filiacao');
            $table->string('numero_bi')->unique();
            $table->string('residencia');
            $table->string('naturalidade');
            $table->string('provincia');
            $table->date('emissao_bi');
            $table->float('altura', 2);
            $table->date('validade_bi');
            $table->enum('sexo',['M','F']);
            $table->enum('estado_civil',['casado(a)','solteiro(a)','divorciado(a)','viuvo(a)']);
            $table->date('data_nascimento');
            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
};
