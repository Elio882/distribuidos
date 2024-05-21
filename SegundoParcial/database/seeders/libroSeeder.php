<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class libroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libros')->insert([
            'titulo' => 'El Gran Libro',
            'editorial' => 'Editorial Uno',
            'anio' => '2023',
            'volumen' => 1,
            'paginas' => 300,
            'precio' => 29.99,
            'cantidad' => 5,
            'disponible' => 1,
            'proveedor_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],);

        DB::table('libros')->insert([
            'titulo' => 'Ciencia Avanzada',
            'editorial' => 'Ciencia Editorial',
            'anio' => '2024',
            'volumen' => 2,
            'paginas' => 450,
            'precio' => 49.99,
            'cantidad' => 10,
            'disponible' => 1,
            'proveedor_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],);
        DB::table('libros')->insert([
            'titulo' => 'Historia Universal',
            'editorial' => 'Historia Editorial',
            'anio' => '2022',
            'volumen' => 3,
            'paginas' => 600,
            'precio' => 59.99,
            'cantidad' => 3,
            'disponible' => 1,
            'proveedor_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ],);

    }
}
