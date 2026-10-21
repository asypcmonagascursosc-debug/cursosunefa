<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Requests\Validarbanner;

class BanerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Banner::orderby('id','ASC')->paginate(10);
       return view('administrador.banner.index')
       ->with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrador.banner.create')
        ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Validarbanner $request)
    {
        $baner= new Banner();

        if ($request->hasFile('imagen2')){
        $imagen2 = $request->file('imagen2');
        $nombreimagen2= 'contenido'.time().'.'.$imagen2->getClientOriginalExtension();
        $ruta=public_path().'/img/post/';
       
        $imagen2->move($ruta,$nombreimagen2);
   //dd($nombreimagen2);

    }
 //dd($nombreimagen2);
    $baner->imagen=$nombreimagen2;
    $baner->estatus=$request->estatus;
    $baner->save();

    return redirect()->route('baner.create')
    ->with('success', '¡Guardado exitoso!');
        
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
         $curso = Banner::find($id);
        if($curso->estatus=='Inactivo'){
            $curso->estatus='Activo';
            $curso->save();
            return redirect()->route('baner.index')
    ->with('success', '¡Activado exitosa!');

        }else{

            $curso->estatus='Inactivo';
            $curso->save();
            return redirect()->route('baner.index')
    ->with('success', '¡Desactivado exitosa!');

        }
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
        $curso = Banner::find($id);
            $ruta=public_path().'/img/post/'.$curso->imagen;
            unlink($ruta);
            $curso->delete();
        return redirect()->route('baner.index')
    ->with('success', '¡Eliminado exitosa!');
    }
}
