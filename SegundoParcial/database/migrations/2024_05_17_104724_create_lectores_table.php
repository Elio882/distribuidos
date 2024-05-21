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
        Schema::create('lectores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('direccion',50);
            $table->string('telefono',50);
            $table->string('email',50);
            $table->timestamps();
        });

        Schema::create('lector_libro', function (Blueprint $table){
            $table->unsignedBigInteger('lector_id');
            $table->unsignedBigInteger('libro_id');
            $table->date('fecha_de_prestamo');
            $table->date('Fecha_de_devolucion_estimada');
            $table->date('Fecha_de_devolucion_real');
            $table->string('estado_del_prestamo');
            $table->foreign('lector_id')->references('id')->on('lectores');
            $table->foreign('libro_id')->references('id')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lector_libro');
        Schema::dropIfExists('lectores');
    }
};
