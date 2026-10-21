<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarIncripcion extends FormRequest
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
            'cedula' => 'required|numeric|min:8',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|regex:/^.+@.+\.com$/i',
            
            'direccion'=> 'required',
            'municipio'=> 'required',
            'parroquia'=> 'required',
            'telefono' => 'required|numeric|min:7|regex:/^[1-9][0-9]*$/',
        ];
    }
    public function messages()
    {
        return [
            'cedula.required' => 'El campo cedula es obligatorio.',
            'cedula.min' => 'El campo cedula debe tener minimo 8 numeros.',
            'cedula.numeric' => 'El campo cedula acepta solo numeros sin puntos.',
            'email.required' => 'El campo email es obligatorio.',
            
            'cedula.numeric' => 'El campo cedula debe contener solo numero.',
            'telefono.required' => 'El campo telefono es obligatorio .',
            'telefono.numeric' => 'El campo telefono es solo numero .',
            'telefono.regex' => 'El campo telefono no puede empezar con cero .',
            'telefono.min' => 'El campo telefono debe tener 7 numeros.',

            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El campo email tiene un formato invalido',
            'email.regex' => 'El campo email debe de terminar en .com',

            'direccion.required' => 'El campo direccion es obligatorio.',
            'municipio.required' => 'El campo municipio es obligatorio.',
            'parroquia.required' => 'El campo parroquia es obligatorio.',
        ];
    }
}
