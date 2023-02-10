<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pessoal_administrativos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('utilizador_id')->unique();
            $table->foreign('utilizador_id')->references('id')->on('utilizadores');
            
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('pessoal_administrativos');
    }
};
