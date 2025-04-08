<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModificarCuentasBancarias extends Migration
{
    public function up()
    {
        Schema::table('cuentas_bancarias', function (Blueprint $table) {
            $table->string('tipo_cuenta');
        });
    }

    public function down()
    {
        Schema::table('cuentas_bancarias', function (Blueprint $table) {
            $table->dropColumn('tipo_cuenta');
        });
    }
}