<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->string('titulo');
            $table->date('lancamento_at');
            $table->integer('duracao');

            $table->integer('classificacao_id')->unsigned();
            $table->foreign('classificacao_id')->on('classificacoes')->references('id');

            $table->text('sinopse');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('filmes', function (Blueprint $table) {
            //
        });
    }
};
