<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class autorLibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('autor_libro')->insert([
            'autor_id' => 1, // ID del autor Abu
            'libro_id' => 4, // ID del libro Las mil y una noches
            'fec_publicacion' => '0900-01-01', // Fecha de publicación aproximada
            'cantidad' => 100, // Cantidad de ejemplares
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('autor_libro')->insert([
            'autor_id' => 2, // ID del autor Gabriel García Márquez
            'libro_id' => 5, // ID del libro Cien años de soledad
            'fec_publicacion' => '1967-01-01', // Fecha de publicación exacta
            'cantidad' => 50, // Cantidad de ejemplares
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('autor_libro')->insert([
            'autor_id' => 3, // ID del autor George Orwell
            'libro_id' => 7, // ID del libro 1984
            'fec_publicacion' => '1949-01-01', // Fecha de publicación exacta
            'cantidad' => 30, // Cantidad de ejemplares
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('autor_libro')->insert([
            'autor_id' => 4, // ID del autor Pablo Neruda
            'libro_id' => 6, // ID del libro Veinte poemas de amor y una canción desesperada
            'fec_publicacion' => '1924-01-01', // Fecha de publicación exacta
            'cantidad' => 20, // Cantidad de ejemplares
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('autor_libro')->insert([
            'autor_id' => 5, // ID del autor Stephen Hawking
            'libro_id' => 8, // ID del libro Breve historia del tiempo
            'fec_publicacion' => '1988-01-01', // Fecha de publicación exacta
            'cantidad' => 40, // Cantidad de ejemplares
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
    }
}
