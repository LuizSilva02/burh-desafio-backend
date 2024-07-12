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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->string('titulo');
            $table->text('descricao');
            $table->enum('tipo_vaga', ['PJ', 'CLT', 'Estágio']);
            $table->decimal('salario', 10, 2)->nullable();
            $table->integer('horario')->nullable();
            $table->timestamps();
        });
    }

    /**
     * ReverseURL_BASE=https://github.com/Schusban/burh-desafio-backend.git
     * the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
