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
            'titulo'=>'las mil y una noche',
            'editorial'=>'Don Bosco',
            'anio'=>'2000',
            'volumen' => 1,
            'paginas' => 250,
            'precio' => 200.00,
            'categoria_id' => 1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('libros')->insert([
            'titulo' => 'Cien años de soledad',
            'editorial' => 'Editorial Sudamericana',
            'anio' => '1967',
            'volumen' => 1,
            'paginas' => 432,
            'precio' => 150.00,
            'categoria_id' => 1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);

        DB::table('libros')->insert([
            'titulo' => 'Veinte poemas de amor y una canción desesperada',
            'editorial' => 'Editorial Nascimento',
            'anio' => '1924',
            'volumen' => 1,
            'paginas' => 72,
            'precio' => 120.00,
            'categoria_id' => 2,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);

        DB::table('libros')->insert([
            'titulo' => '1984',
            'editorial' => 'Debolsillo',
            'anio' => '1949',
            'volumen' => 1,
            'paginas' => 328,
            'precio' => 180.00,
            'categoria_id' => 3,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('libros')->insert([
            'titulo' => 'Breve historia del tiempo',
            'editorial' => 'Crítica',
            'anio' => '1988',
            'volumen' => 1,
            'paginas' => 256,
            'precio' => 220.00,
            'categoria_id' => 4,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        
    }
}
