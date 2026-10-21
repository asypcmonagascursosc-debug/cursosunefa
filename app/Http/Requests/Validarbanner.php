<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validarbanner extends FormRequest
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
          
          'imagen2' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=1280,min_height=720,max_width=1280,max_height=720',
        
      ];
    }
        public function messages()
    {
        return [
          'imagen2.required' => 'El Contenido es obligatorio .',
            'imagen2.image' => 'El archivo no es una Imagen.',
            'imagen2.mimes' => 'El Formato del contenido debe ser: jpeg,png,jpg',
            'imagen2.max' => 'La imagen del contenido excede los 2MB',
            'imagen2.dimensions' => 'Las Dimensiones del contenido son 1280px de ancho y 720px de alto',
        
            
        ];
    }
}
