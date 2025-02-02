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
        Schema::create('filmes_atores', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->references('id')->on('filmes');

            $table->integer('ator_id')->unsigned();
            $table->foreign('ator_id')->references('id')->on('atores');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes_atores');
    }
};
