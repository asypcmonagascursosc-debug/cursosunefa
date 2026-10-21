<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Curso;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::where('estatus', 'activo')->get();
        $cursos = Curso::orderby('id','DESC')
        ->where('estatus', 'activo')->paginate(3);
        return view('welcome', compact('banners'))
        ->with('banners',$banners)
        ->with('cursos',$cursos);
        
       
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
       $curso = Curso::where('id', $id)->first();
       return view('detalle')->with('curso',$curso);
       //dd($id);
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
        return view('final',$id);
    }
}
