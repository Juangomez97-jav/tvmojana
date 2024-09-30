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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string("nombres");
            $table->string("apellidos");
            $table->integer("documento");
            $table->string("telefono");
            $table->string("barrio");
            $table->integer("calle");
            $table->integer("poste");
            $table->string("sucursal");
            $table->string("estado");
            $table->unsignedBigInteger("servicio_id")->constrained();
            $table->timestamps();

            $table->foreign("servicio_id")->refences("id")
              ->on("servicios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
