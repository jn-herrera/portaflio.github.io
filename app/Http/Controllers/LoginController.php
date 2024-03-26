<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index ()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        
        $request->validate([
           
          'email' => 'required|email',
          'password' => 'required'

            // Aquí defines las reglas de validación para los campos de tu formulario
        ]);

        if(!auth()->attempt($request->only('email','password'))){

            //Aqui se crea el mensaje
            return back()->with('message','Mensaje incorrecto');


        };


    }
   
}
