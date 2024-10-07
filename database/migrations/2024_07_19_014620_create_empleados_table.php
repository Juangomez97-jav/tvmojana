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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->integer("documento");
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("cargo");
            $table->string("direccion");
            $table->string("telefono");
            $table->foreignId("user_id")->constrained()
            ->references("id")
            ->on("users");
            $table->foreignId("empresa_id")->constrained()
            ->references("id")
            ->on("empresas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
