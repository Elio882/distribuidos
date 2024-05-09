<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class autorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('autores')->insert([
            'nombres' => 'Abu Abd-Allah',
            'apellidos' => 'Muhammad bin',
            'fec_nac' => '0900-01-01',
            'nacionalidad' => 'arabe',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('autores')->insert([
            'nombres' => 'Gabriel García',
            'apellidos' => 'Márquez',
            'fec_nac' => '1927-03-06',
            'nacionalidad' => 'Colombiano',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('autores')->insert([
            'nombres' => 'George',
            'apellidos' => 'Orwell',
            'fec_nac' => '1903-06-25',
            'nacionalidad' => 'Británico',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('autores')->insert([
            'nombres' => 'Pablo',
            'apellidos' => 'Neruda',
            'fec_nac' => '1904-07-12',
            'nacionalidad' => 'Chileno',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
        DB::table('autores')->insert([
            'nombres' => 'Stephen',
            'apellidos' => 'Hawking',
            'fec_nac' => '1942-01-08',
            'nacionalidad' => 'Británico',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ],);
    }
}
