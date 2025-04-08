<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto'); // ID autoincremental Primary Key
            $table->string('nombre_producto'); // Nombre del titular
            $table->text('descripcion'); // Descripción de la cuenta
            $table->decimal('precio', 15, 2); // Saldo con 15 enteros y 2 decimales
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
