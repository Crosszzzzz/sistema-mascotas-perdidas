<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();

            $table->date('fecha_perdida');

            $table->string('zona_barrio', 100);

            $table->string('estado', 30)
                  ->default('Perdido');

            $table->decimal('recompensa', 10, 2)
                  ->default(0.00);

            $table->foreignId('mascota_id')
                  ->constrained('mascotas')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->timestamp('fecha_publicacion')
                  ->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};