<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resumen extends Model
{
    use HasFactory;
    protected $table = 'resumenes';
    protected $fillable = [
        'texto'
    ];

    public function libro():HasOne{
        return $this->hasOne(Libro::class, 'id');
    } 
    //cuando es una relacion de uno a uno 
}
