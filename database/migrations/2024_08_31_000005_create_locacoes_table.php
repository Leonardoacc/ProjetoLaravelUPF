<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocacoesTable extends Migration
{
    public function up()
    {
        Schema::create('locacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('filme_id');
            $table->date('data_locacao');
            $table->date('data_devolucao')->nullable();
            $table->timestamps();

            // Relacionamento com as tabelas clientes e filmes
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('filme_id')->references('id')->on('filmes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('locacoes');
    }
};
