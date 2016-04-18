<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
 
use App\Carreras;
use App\Materias;
use App\Temas;

class funcionesController extends Controller
{
   public function inicio()
   {
        $carreras = Carreras::all();
        return view('index', compact('carreras'));

   }
    public function materias($id)
   {
        //obtiene los nombres de todas las carreras de la base de datos(para el menu).
        $carreras = Carreras::all();
        //obtiene los datos de la carrera seleccionada(titulo).
        $carrera= Carreras::find($id);
        //obtener las materias de la carrera seleccionada
        $materias = Materias::where('id_carreras', '=', $id)->get();
        
        return view('materias', compact('carreras', 'materias', 'carrera'));

   }

   public function pdf_materias ($id_materias)
   {
    $materia =Materias::find($id_materias);
    $carrera=Carreras::find($materia->id_carreras);
    $temas = Temas::where('id_materia', '=', $id_materias)->get();
    $view=\View::make('pdf_materias', compact('materia', 'carrera', 'temas'))->render();

    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('materias');
   }
}
