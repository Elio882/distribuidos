<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class lectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lectores')->insert([
            'nombre' => 'Lector Uno',
            'direccion' => 'Calle Principal 123',
            'telefono' => '555-1234',
            'email' => 'contacto@lectoruno.com',
            'created_at' => now(),
            'updated_at' => now(),
        ],);
        DB::table('lectores')->insert([
            'nombre' => 'Lector Dos',
            'direccion' => 'Avenida Central 456',
            'telefono' => '555-5678',
            'email' => 'info@lectordos.com',
            'created_at' => now(),
            'updated_at' => now(),
        ],);
        DB::table('lectores')->insert([
            'nombre' => 'Lector Tres',
            'direccion' => 'Boulevard Industrial 789',
            'telefono' => '555-8765',
            'email' => 'ventas@lectortres.com',
            'created_at' => now(),
            'updated_at' => now(),
        ],);
    }
}
