<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('administrador.auth.login');
    }
    public function iniciar(Request $request){
        //validamos

           $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'El correo es obligatorio.',
            'password.min' => 'El password es minimo 5 caracter .',
            'password.required' => 'El password es obligatorio.',
            "email.exists" => "El Email no existe",
            

         ]);
 
        $credentials=[
         "email"=>$request->email,
         "password"=>$request->password,
        ];
       
     if (Auth::attempt($credentials)){
        // dd('hola');
         $request->session()->regenerate();
         return redirect()->intended(route('inicio.index'));
         $user=Auth::login();
     }else{
          //return redirect(route('login')); 
              // cargo el uuario de la base de datos
       $user = \App\Models\User::where('email', $request->email)->first();
    //comparo las contraseñas si son diferentes mando un mensaje
        if ($user && ! Hash::check($request->password, $user->password)) {
           $errors = ['password' => 'contraseña incorrecta'];
     
        return redirect()->back()->withErrors( $errors);
        }
     }
     }

     public function salir(Request $request){
        //llamo la clase que tiene las autenticaciones
        Auth::logout();
        //cerramos las sesiones
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('administrador.auth.login');
    
    }
}
