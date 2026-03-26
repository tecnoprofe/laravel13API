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
        
        // Migración 1: aerolineas
        Schema::create('aerolineas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            
            $table->timestamps();
            $table->softDeletes();
        });

        // Migración 2: vuelos (Depende de aerolineas)
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aerolinea_id')->constrained(); // ¡Llave Foránea Automática!
            $table->string('destino');
            
            $table->timestamps();
            $table->softDeletes(); // Agrega la columna deleted_at
        });

        // Migración 3: pasajeros (Depende de vuelos)
        Schema::create('pasajeros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vuelo_id')->constrained()->onDelete('cascade');
            $table->string('nombre_completo');
             
            $table->timestamps();
            $table->softDeletes();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasajeros');
        Schema::dropIfExists('vuelos');
        Schema::dropIfExists('aerolineas');
    }
};
