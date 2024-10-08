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
        Schema::create('requerimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_requerimiento');
            $table->string('nombre_servicio');
            $table->string('nombre_cliente');
            $table->string('nombre_empleado');
            $table->string('estado');
            $table->foreignId("empleado_id")->constrained()
            ->references("id")
            ->on("empleados");
            $table->foreignId("cliente_id")->constrained()
            ->references("id")
            ->on("clientes");
            $table->foreignId("estado_id")->constrained()
            ->references("id")
            ->on("estados");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requerimientos');
        $table->dropForeign(['empleado_id','factura_id']);
        $table->dropColumn('empleado_id','factura_id');
    }
};
