<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Parroquia;


class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    $municipios = Municipio::orderby('id','ASC')->get();



return view('administrador.municipios.index')
->with('municipios', $municipios);
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
        $parroquias= new Parroquia();
         $parroquias->municipio_id=$request->municipio_id;
         $parroquias->parroquia=strtoupper($request->nombre);

    $parroquias->save();
        return redirect()->route('municipio.show',$request->municipio_id)
    ->with('success', '¡ Guardado Correctamente');
      // dd($request->municipio_id.$request->nombre);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $municipio = Municipio::where('id',$id)->first();
        return view('administrador.municipios.create')
->with('municipio', $municipio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $municipio = Municipio::where('id',$id)->first();
        
        $parroquias = Parroquia::where('municipio_id',$id)->get();
       return view('administrador.municipios.edit')
->with('parroquias', $parroquias )
->with('municipio', $municipio);
    
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
    public function destroy(Request $request,string $id)
    {
       
         $parroquia = Parroquia::findOrFail($id); // Busca o lanza 404 si no existe
        $parroquia->delete(); // Elimina el registro

        return redirect()->route('municipio.edit',$request->municipio_id)
                         ->with('success', 'Parroquia eliminada correctamente.');
       
    }
}
