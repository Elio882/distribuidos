<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros';

    protected $fillable = [
        'titulo',
        'editorial',
        'anio',
        'volumen',
        'paginas',
        'precio',
        'cantidad',
        'disponible'
    ];
    public function proveedor():BelongsTo{
        return $this->belongsTo(Proveedor::class);
    }

    public function lectores():BelongsToMany{
        return $this->belongsToMany(Lector::class)->withPivot(
            'fecha_de_prestamo',
            'Fecha_de_devolucion_estimada',
            'Fecha_de_devolucion_real',
            'estado_del_prestamo',
            'created_at',
            'udated_at'
        );
    } 

}
