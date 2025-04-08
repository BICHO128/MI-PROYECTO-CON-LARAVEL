<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('cuentas_bancarias', function (Blueprint $table) {
            $table->increments('id_cuenta'); // ID autoincremental Primary Key
            $table->string('nombre_titular'); // Nombre del titular
            $table->text('descripcion'); // Descripción de la cuenta
            $table->decimal('saldo', 15, 2); // Saldo con 15 enteros y 2 decimales
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuentas_bancarias');
    }
};
