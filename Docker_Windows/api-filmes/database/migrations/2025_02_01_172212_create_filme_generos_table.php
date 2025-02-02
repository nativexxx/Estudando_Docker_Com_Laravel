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
        Schema::create('filme_generos', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->on('filmes')->references('id');

            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->on('generos')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filme_generos');
    }
};
