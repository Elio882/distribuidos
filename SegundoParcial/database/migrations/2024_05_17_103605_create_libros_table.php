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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',50);
            $table->string('editorial',25);
            $table->string('anio',4)->default(date('Y'));
            $table->integer('volumen')->default(1);
            $table->integer('paginas')->default(50);
            $table->decimal('precio', 6, 2)->nullable(true);
            $table->integer('cantidad')->default(1);
            $table->binary('disponible');
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
