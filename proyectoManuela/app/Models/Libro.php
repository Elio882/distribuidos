<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Autor;

class libro extends Model
{
    use HasFactory;
    protected $table = 'libros'; // relacion que exite entre el modelo libros a categoria
    protected $fillable = [
        'titulo', 
        'anio',  
        'editorial', 
        'anio',
        'volumen',
        'paginas',
        'precio',
        'categoria_id' 
    ];

    public function categoria():BelongsTo{
        return $this->belongsTo(Categoria::class); //categoria_id
    } // realacion que existe entre el modelo categoria y libro

    public function resumen():HasOne{
        return $this->hasOne(Resumen::class, 'id');
    } 
    // por no hacer como el inge mi relacion es de muchos a muchos

    //generar la relacion inversa

    public function autores():BelongsToMany{
        return $this->belongsToMany(Autor::class)->withPivot(
            'fec_publicacion',
            'cantidad',
            'created_at',
            'updated_at'
        );
    }

    //para guardar libros

    public static function guardar ($request){
        $libro = Libro::create([
            'titulo' => $request['titulo'],
            'editorial' => $request['editorial'],
            'anio' => $request['anio'],
            'paginas' => $request['paginas'],
            'volumen' => $request['volumen'],
            'precio' => $request['precio'],
            'categoria_id' => $request['categoria_id'],
        ]);
        return $libro;
    }
}

/*
fillable atributos queremos que se manipulen vsble
hiiden se prodan ser manipulables pero estaran ocultas no visible.
la categoria tiene muchos libros 
*/ 