<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lector extends Model
{
    use HasFactory;
    protected $table = 'lectores';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email'
    ];

    public function libros():BelongsToMany{
        return $this->belongsToMany(Libro::class)->withPivot(
            'fecha_de_prestamo',
            'Fecha_de_devolucion_estimada',
            'Fecha_de_devolucion_real',
            'estado_del_prestamo',
            'created_at',
            'udated_at'
        );
    } 
}
