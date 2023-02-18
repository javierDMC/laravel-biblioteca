<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autores = Autor::all();
        $autores->each(function($autor) {
            Libro::factory()->count(2)->create([
                'autor_id' => $autor->id
            ]);
    });
        // $autor = new Autor();
        // $autor->nombre = "Juan Seeder";
        // $autor->nacimiento = 1960;
        // $autor->save();
        // $libro = new Libro();
        // $libro->titulo = "El libro del Seeder";
        // $libro->editorial = "Seeder S.A.";
        // $libro->precio = 10;
        // $libro->autor()->associate($autor);
        // $libro->save();
    }
}
