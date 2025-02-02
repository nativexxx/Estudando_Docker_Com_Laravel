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
        Schema::create('filme_diretores', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->on('filmes')->references('id');

            $table->integer('diretor_id')->unsigned();
            $table->foreign('diretor_id')->on('diretores')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filme_diretores');
    }
};
