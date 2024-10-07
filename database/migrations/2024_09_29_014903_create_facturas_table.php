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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("descripcion");
            $table->string("precio");
            $table->foreignId("cliente_id")->constrained()
            ->references("id")
            ->on("clientes");
            $table->foreignId("estado_id")->constrained()
            ->references("id")
            ->on("estados");
            $table->foreignId("servicio_id")->constrained()
            ->references("id")
            ->on("servicios");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
