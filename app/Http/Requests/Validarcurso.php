<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Date;
use Carbon\Carbon;

class Validarcurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'horas' => 'required|integer|min:12',
            'nombre' => 'required',
          'imagen2' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1280,min_height=720,max_width=1280,max_height=720',
          'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=500,min_height=600,max_width=500,max_height=600',
          'fechainicio' => 'required|date',
          'fechafinal' => 'required|date|after:fechainicio,today',
          
          
      ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El Titulo es obligatorio.',
            'imagen.required' => 'La Imagen es obligatoria.',
            'imagen.image' => 'El archivo no es una Imagen.',
            'imagen.mimes' => 'El Formato debe ser: jpeg,png,jpg',
            'imagen.max' => 'La imagen excede los 2MB',
            'imagen.dimensions' => 'Las Dimensiones de la imagen son 500px de ancho y 600px de alto',
            'imagen2.required' => 'El Contenido es obligatorio .',
            'imagen2.image' => 'El archivo no es una Imagen.',
            'imagen2.mimes' => 'El Formato del contenido debe ser: jpeg,png,jpg',
            'imagen2.max' => 'La imagen del contenido excede los 2MB',
            'imagen2.dimensions' => 'Las Dimensiones del contenido son 1280px de ancho y 720px de alto',
            'horas.required' => 'Las horas son obligatorias.',
            'horas.integer' => 'Las horas son numeros enteros.',
            'horas.min' => 'Las horas minimas son 12.',
            'fechainicio.required' => 'La Fecha de inicio es obligatoria.',
            'fechainicio.date' => 'La Fecha de inicio debe tener el formato dd/mm/aaaa.',
            'fechaifinal.required' => 'La Fecha de culminacion es obligatoria.',
            'fechaifinal.date' => 'La Fecha de culminación debe tener el formato dd/mm/aaaa.',
            'fechafinal.after' => 'La Fecha de culminación debe ser mayor a la fecha de inicio',
            'fechafinal.today' => 'La Fecha de culminación debe ser distinta a la fecha de inicio',
            
            
        ];
    }
}
