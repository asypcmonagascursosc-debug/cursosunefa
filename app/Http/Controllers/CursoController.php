<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Inscrito;
use App\Http\Requests\Validarcurso;
use Carbon\Carbon;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
  
    {
        $cursos = Curso::orderby('id','ASC')->get();
       return view('administrador.curso.index')
       ->with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('administrador.curso.create')
        ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Validarcurso $request)

    {

      /* Validamos los datos antes de guardar*/
      $validatedData = $request->validated();

   


       $curso= new Curso();

    if ($request->file('imagen')){
        $imagen = $request->file('imagen');
        $nombreimagen= 'curso'.time().'.'.$imagen->getClientOriginalExtension();
        $ruta=public_path().'/img/post/';
        $imagen->move($ruta,$nombreimagen);
   

    }
    /*if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
        $path = $request->file('image')->store('images', 'public');
        // Store $path in your database
    }*/
    if ($request->file('imagen2')){
        $imagen2 = $request->file('imagen2');
        $nombreimagen2= 'contenido'.time().'.'.$imagen2->getClientOriginalExtension();
        $ruta=public_path().'/img/post/';
        $imagen2->move($ruta,$nombreimagen2);
   

    }
    $curso->imagen=$nombreimagen;
    $curso->nombre=$request->nombre;
    $curso->fechainicio=$request->fechainicio;
    $curso->fechafinal=$request->fechafinal;
    $curso->termino=$request->termino;
    $curso->horas=$request->horas;
    $curso->contenido=$nombreimagen2;
    $curso->estatus=$request->estatus;
    $curso->save();

    return redirect()->route('curso.create')
    ->with('success', '¡Guardado exitoso!');

    


      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // dd($id);
       $curso = Curso::where('id',$id)->first();
        return view('administrador.curso.show')
       ->with('cursos',$curso);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curso = Curso::find($id);
        if($curso->estatus=='Inactivo'){
            $curso->estatus='Activo';
            $curso->save();
            return redirect()->route('curso.index')
    ->with('success', '¡Activado exitosa!');

        }else{

            $curso->estatus='Inactivo';
            $curso->save();
            return redirect()->route('curso.index')
    ->with('success', '¡Desactivado exitosa!');

        }
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Validarcurso $request, string $id)
    {
       //dd('hola');
       $validatedData = $request->validated();

       $curso = Curso::find($id);
       $ruta=public_path().'/img/post/'.$curso->imagen;
       unlink($ruta);
       if ($request->file('imagen')){
        $imagen = $request->file('imagen');
        $nombreimagen= 'curso'.time().'.'.$imagen->getClientOriginalExtension();
        $ruta=public_path().'/img/post/';
        $imagen->move($ruta,$nombreimagen);
   

    }
    /*if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
        $path = $request->file('image')->store('images', 'public');
        // Store $path in your database
    }*/
    if ($request->file('imagen2')){
        $imagen2 = $request->file('imagen2');
        $nombreimagen2= 'contenido'.time().'.'.$imagen2->getClientOriginalExtension();
        $ruta=public_path().'/img/post/';
        $imagen2->move($ruta,$nombreimagen2);
   

    }
    $curso->imagen=$nombreimagen;
    $curso->nombre=$request->nombre;
    $curso->fechainicio=$request->fechainicio;
    $curso->fechafinal=$request->fechafinal;
    $curso->termino=$request->termino;
    $curso->horas=$request->horas;
    $curso->contenido=$nombreimagen2;
    $curso->estatus=$request->estatus;
    $curso->save();
    return redirect()->route('curso.index')
    ->with('success', '¡Actualizacion exitosa!');
  

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscrito = Inscrito::where('curso_id',$id)->first();

        if (!empty($inscrito )) {
            return redirect()->route('curso.index')
    ->with('error', '¡No se puede eliminar hay estudiantes en este curso!');

        }else{
            $curso = Curso::find($id);
            $ruta=public_path().'/img/post/'.$curso->imagen;
            unlink($ruta);
            $curso->delete();
        return redirect()->route('curso.index')
    ->with('success', '¡Eliminado exitosa!');
        }
    }
}
