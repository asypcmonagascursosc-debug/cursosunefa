<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Estudiante;


class ParroquiaController extends Controller
{
    public function obtenerParroquias(Request $request)
    {
        //recibo el codigo
        $query = $request->get('q');
         $Parroquias = Parroquia::where('municipio_id',$query)->get();
        //$Parroquias = $query;
        return response()->json($Parroquias);
    }

    public function obtenerCedula(Request $request)
    {
        //recibo el codigo
        $query = $request->get('q');
         $buscarestudiante = Estudiante::where('cedula',$query)->get();
        
        //$Parroquias = $query;
        return response()->json($buscarestudiante);
    }
}
