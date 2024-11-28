<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentosTable extends Migration
{
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('locacao_id');
            $table->decimal('valor', 8, 2);
            $table->string('metodo_pagamento');
            $table->date('data_pagamento');
            $table->timestamps();

            $table->foreign('locacao_id')->references('id')->on('locacoes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagamentos');
    }
};
