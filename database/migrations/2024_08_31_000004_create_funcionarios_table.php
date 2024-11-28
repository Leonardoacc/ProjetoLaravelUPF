<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do funcionário
            $table->string('email')->unique(); // Email único
            $table->string('telefone', 15)->nullable(); // Telefone com limite de caracteres, opcional
            $table->string('endereco')->nullable(); // Endereço opcional
            $table->string('cargo'); // Cargo do funcionário
            $table->decimal('salario', 8, 2); // Salário com 2 casas decimais
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
