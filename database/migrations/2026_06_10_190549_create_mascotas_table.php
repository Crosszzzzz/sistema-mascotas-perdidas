<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('tipo', 30);
            $table->string('raza', 50);
            $table->string('color', 50);
            $table->text('caracteristicas_especiales')->nullable();

            $table->foreignId('usuario_id')
                  ->constrained('usuarios')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};