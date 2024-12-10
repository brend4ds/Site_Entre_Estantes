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
        Schema::create('avaliacoes', function (Blueprint $table) {
            // id, usuario_id, livro_id, nota, comentario, data_avaliacao
            $table->id();
            $table->foreignId('usuario_id');
            $table->foreignId('livro_id');
            $table->smallInteger('nota');
            $table->string('comentario');
            $table->date('data_avaliacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacoes');
    }
};
