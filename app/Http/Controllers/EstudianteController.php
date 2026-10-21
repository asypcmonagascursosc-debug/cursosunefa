<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Inscrito;
use App\Http\Requests\ValidarIncripcion;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inscribir');
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
        //validamos datos
        
        
        
        // busco al estudiante
        $buscarestudiante = Estudiante::where('cedula',$request->cedula)->first();
        

        // veo si ya esta inscrito
        if (!empty($buscarestudiante)){
        $inscrito = DB::table('inscritos')
            ->where('estudiante_id', '=', $buscarestudiante->id)
            ->where('curso_id', '=', $request->curso_id)
          
            ->first();
        }
            
            

if (!empty($inscrito)){
    return redirect()->route('estudiante.show',$request->curso_id)
    ->with('success', '¡Esta persona ya fue  inscrita en el Curso!');

}else{
     if (empty($buscarestudiante)){
       // $validatedData = $request->validated();
    
    $estudiante= new Estudiante();
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

    //guardo el curso donde se inscribio este estudiante
    $buscarestudiante = Estudiante::where('cedula',$request->cedula)->first();
   
    $inscrito= new Inscrito();
    $inscrito->estudiante_id=$buscarestudiante->id;
    $inscrito->curso_id=$request->curso_id;
    $inscrito->save();


return view('final')
->with('success', '¡Guardado exitoso!')
->with('id',$request->curso_id);  


}else{
 $buscarestudiante = Estudiante::where('cedula',$request->cedula)->first();
   
    $inscrito= new Inscrito();
    $inscrito->estudiante_id=$buscarestudiante->id;
    $inscrito->curso_id=$request->curso_id;
    $inscrito->save();


return view('final')
->with('success', '¡Guardado exitoso!')
->with('id',$request->curso_id);  


}

    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = Curso::where('id', $id)->first();
        $municipios =Municipio::all(); 
        return view('inscribir')
       ->with('municipios',$municipios)
       ->with('curso',$curso);

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
