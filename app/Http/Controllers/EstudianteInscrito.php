<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Inscrito;
use App\Models\Municipio;
use App\Http\Requests\ValidarIncripcion;
use Illuminate\Support\Facades\DB;

class EstudianteInscrito extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos= Estudiante::select('estudiantes.cedula',
        'estudiantes.apellido','estudiantes.nombre','estudiantes.municipio',
        'estudiantes.parroquia'
        )
->join('inscritos', 'estudiantes.id', '=', 'inscritos.estudiante_id')
//->join('curso', 'curso.id', '=', 'inscritos.curso_id')
->orderby('estudiantes.cedula','ASC')->distinct('estudiantes.cedula')->get();



return view('administrador.inscritos.index')
->with('estudiantes',$productos)

;

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
    public function store(ValidarIncripcion $request)
    {
        $validatedData = $request->validated();
      
        $estudiante = Estudiante::where('cedula',$request->cedula)->first();
    $buscarmunicipio = Municipio::where('id',$request->municipio)->first();
    $estudiante->nacionalidad=$request->nacionalidad;
    $estudiante->cedula=$request->cedula;
    $estudiante->nombre=$request->nombre;
    $estudiante->apellido=$request->apellido;
    $estudiante->telefono=$request->codarea.$request->telefono;
    $estudiante->email=$request->email;
    $estudiante->parroquia=$request->parroquia;
    $estudiante->municipio=$buscarmunicipio->municipio;
    $estudiante->direccion=$request->direccion;

    $estudiante->save();
         
          $productos= Estudiante::select('estudiantes.cedula',
        'estudiantes.apellido','estudiantes.nombre','estudiantes.municipio',
        'estudiantes.parroquia', 'curso.nombre as tema'
        )
->join('inscritos', 'estudiantes.id', '=', 'inscritos.estudiante_id')
->join('curso', 'curso.id', '=', 'inscritos.curso_id')
->orderby('estudiantes.cedula','ASC')->get();



return view('administrador.inscritos.index',['mensaje' => 'Datos actualizados'])
->with('estudiantes',$productos)
   ;
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
                $estudiante = Estudiante::where('cedula',$id)->first();
                $municipios =Municipio::all(); 
                return view('administrador.inscritos.edit')
                ->with('estudiante',$estudiante)
                ->with('municipios',$municipios);

                   

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiante = Estudiante::where('cedula',$id)->first();
        $id=$estudiante->id;
        $resultado= Estudiante::select('estudiantes.cedula',
        'estudiantes.apellido','estudiantes.nombre','estudiantes.direccion','estudiantes.municipio',
        'estudiantes.parroquia','curso.termino', 'estudiantes.telefono', 'estudiantes.email','curso.nombre as tema'
        )
->join('inscritos', 'estudiantes.id', '=', 'inscritos.estudiante_id')
->join('curso', 'curso.id', '=', 'inscritos.curso_id')
->where('inscritos.estudiante_id', '=', "$estudiante->id")
->get(); return view('administrador.inscritos.create')
                ->with('resultado',$resultado)

        ;
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
