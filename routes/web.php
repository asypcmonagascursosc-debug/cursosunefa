<?php

use App\Http\Controllers\BanerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ParroquiaController;
use App\Http\Controllers\EstudianteInscrito;

/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'login'])->name('login'); 
Route::post('/validar', [LoginController::class, 'iniciar'])->name('validar');
Route::resource('inicio',InicioController::class);
Route::resource('curso',CursoController::class);
Route::get('curso/{id}/destroy', [CursoController::class, 'destroy'])
->name('administrador.curso.destroy');
Route::resource('estudiante',EstudianteController::class);
Route::resource('estudianteinscritos',EstudianteInscrito::class);

//baner
Route::resource('baner',BanerController::class);

Route::get('baner/{id}/destroy', [BanerController::class, 'destroy'])
->name('administrador.baner.destroy');


Route::resource('municipio',MunicipioController::class);
Route::get('salir', [LoginController::class, 'salir'])->name('salir');

 Route::get('/obtener-parroquias', [ParroquiaController::class, 'obtenerParroquias'])
        ->name('buscar_parroquias');
         Route::get('/obtener-cedula', [ParroquiaController::class, 'obtenerCedula'])
        ->name('buscar_cedula');



Route::resource('welcome',WelcomeController::class);
