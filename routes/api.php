<?php

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\LibroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('',function () { return response()->json('Bienvenido', 200);});

Route::apiResource('libros', LibroController::class);
// Route::get('libros', [LibroController::class, 'index']);

// Route::get('/libros/{id}', [LibroController::class, 'show']);

// Route::resource('libros', 'LibroController');

Route::get('relacionPrueba', function() {
    $autor = Autor::findOrFail(2);
    $libro = new Libro();
    $libro->titulo = "Libro de prueba 2" . rand();
    $libro->editorial = "Editorial de prueba 2";
    $libro->precio = 5;
    $libro->autor()->associate($autor);
    $libro->save();
    return redirect()->route('libros.index');
    });
