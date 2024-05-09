<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all()->sortBy([['nombre','asc'],['updated_at','asc']]);
        //dd($categorias);//que informacion tiene esa linea
        // invocar la vista desde el controlador
        return view('categorias.index')
                ->with('datos',['uno'=>1,'dos'=>2,'tres'=>3])
                ->with('categorias', $categorias); // el punto en vexz de \
                //>with('variable','informacion');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
