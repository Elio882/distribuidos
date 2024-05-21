<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Autor extends Model
{
    use HasFactory;
    protected $table = 'autores';
    protected  $fillable=[
        'nombres',
        'apellidos',
        'fec_nac',
        'nacionalidad'
    ];

    public function libros():BelongsToMany{
        return $this->BelongsToMany(Libro::class)->withPivot(
            'fec_publicacion',
            'cantidad',
            'created_at',
            'udated_at'
        ); // indica la rerlacion de muchos a muchos 
    }
    //with pivot los archivos que se mostraran de los atributos de relacion que se tiene
}
