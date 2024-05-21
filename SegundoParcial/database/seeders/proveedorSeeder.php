<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedores')->insert([
            'nombre' => 'Empresa Uno',
            'direccion' => 'Calle Falsa 123',
            'telefono' => '555-1234',
            'email' => 'contacto@empresa1.com',
            'nit' => '1234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ],);
        DB::table('proveedores')->insert([
            'nombre' => 'Empresa Dos',
            'direccion' => 'Avenida Siempre Viva 742',
            'telefono' => '555-5678',
            'email' => 'info@empresa2.com',
            'nit' => '0987654321',
            'created_at' => now(),
            'updated_at' => now(),
        ],);
        DB::table('proveedores')->insert([
            'nombre' => 'Empresa Tres',
            'direccion' => 'Boulevard de los Sueños Rotos 456',
            'telefono' => '555-8765',
            'email' => 'admin@empresa3.com',
            'nit' => '1122334455',
            'created_at' => now(),
            'updated_at' => now(),
        ],);
    }
}
