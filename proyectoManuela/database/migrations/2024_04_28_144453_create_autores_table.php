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
        Schema::create('autores', function (Blueprint $table) {
            $table->id(); //id
            $table->string('nombres',20);
            $table->string('apellidos',30);
            $table->date('fec_nac');
            $table->string('nacionalidad',15)->default('boliviano');
            $table->timestamps();
        });
        //libros autores
        Schema::create('autor_libro', function (Blueprint $table) {
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('libro_id');
            $table->date('fec_publicacion');
            $table->integer('cantidad')->default(10);
            $table->foreign('autor_id')->references('id')->on('autores');
            $table->foreign('libro_id')->references('id')->on('libros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autor_libro');
        Schema::dropIfExists('autores');
    }
};
