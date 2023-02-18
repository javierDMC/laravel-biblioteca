<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{

    public function index()
    {
        $libros = Libro::get();
        // $libros = array(
        //     array("titulo" => "El juego de Ender",
        //     "autor" => "Orson Scott Card"),
        //     array("titulo" => "La tabla de Flandes",
        //     "autor" => "Arturo Pérez Reverte"),
        //     array("titulo" => "La historia interminable",
        //     "autor" => "Michael Ende"),
        //     array("titulo" => "El Señor de los Anillos",
        //     "autor" => "J.R.R. Tolkien")
        //     );
            return response()->json($libros, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function store(Request $request)
    {
        return response()->json($request, 201)
        ->header('Cabecera1', 'Valor1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return $libro;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
