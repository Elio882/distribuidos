<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;   
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('',[CategoriaController::class,'index'])->name('categoria_index');
Route::get('categorias/mostrar/{id}',[CategoriaController::class,'show'])->name(('categoria_mostrar'));
Route::get('categorias/{id}/editar',[CategoriaController::class,'edit'])->name(('categoria_editar'));
Route::post('categorias/actualizar/{id}',[CategoriaController::class,'update'])->name(('categoria_actualizar'));
Route::get('libros',[LibroController::class, 'index'])->name('libro.index');
Route::get('libros/nuevo',[LibroController::class, 'create'])->name('libro.create');
Route::post('libros/guardar',[LibroController::class, 'store'])->name('libro.store');
// con el controller de categoria con el metoo show
