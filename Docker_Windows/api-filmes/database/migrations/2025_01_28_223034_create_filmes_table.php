<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id')->unsigned(); // Chave primária unsigned e auto incremento que não pode ser nulo ou negativo
            $table->string('titulo'); // Título do filme
            $table->date('data_lancamento'); // Data de lançamento
            $table->integer('duracao'); // Duração em minutos

            $table->integer('classificacao_id')->unsigned(); // ID da classificação
            $table->foreign('classificacao_id')->references('id')->on('classificacoes'); // Chave estrangeira para a tabela "classificacoes"

            $table->text('sinopse'); // Sinopse do filme

            $table->timestamps(); // Criado em e atualizado em
            $table->softDeletes(); // Exclusão lógica
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes'); // Remove a tabela
    }
};