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
        Schema::create('livros', function (Blueprint $table) {
            // id, titulo, autor, editora, ano_publicacao, genero, sinopse, capa
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('editora');
            $table->integer('ano_publicacao');
            $table->string('genero');
            $table->string('sinopse');
            $table->string('capa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
