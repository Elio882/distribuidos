<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use App\Models\libro;
use App\Models\categoria;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all()->sortBy('titulo');
        return view('libros.index')->with('libros',$libros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // return "formulario para un nuevo libro";

       $categorias = categoria::all()->sortBy('nombre');
       $autores = Autor::all()->sortBy([['apellidos','asc'],['nombres','asc']]);
       return view('libros.nuevo')
                ->with('categorias',$categorias)
                ->with('autores',$autores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = Libro::guardar($request);
        $autor = Autor::find($request['autor']);
        $libro->autores()->attach($autor,[
            'fec_publicacion'=>$request['fec_publicacion'],
            'cantidad'=>$request['cantidad'],
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        return redirect()->route('libro.index');
        //return $autor;
        //return $autor;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}