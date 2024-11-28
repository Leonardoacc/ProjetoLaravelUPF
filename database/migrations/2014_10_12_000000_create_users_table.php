<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('name'); // Nome do usuário
            $table->string('email')->unique(); // E-mail único
            $table->timestamp('email_verified_at')->nullable(); // Verificação de e-mail
            $table->string('password'); // Senha
            $table->rememberToken(); // Token de autenticação "lembrar-me"
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); // Remove a tabela se necessário
    }
}
