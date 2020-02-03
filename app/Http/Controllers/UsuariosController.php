<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UsuariosController extends Controller
{
    //
    public function getSocios(){
        $objSocios = new App\Usuario; // Instancio el model Producto para obtener los campos visibles y verificar si lo ingresado es correcto.
        
        // Obtengo los datos del model
        $objSocios      = App\Usuario::get();
        return view('socios', compact('objSocios'));
    }

    public function crearUsuario( Request $request){
        $objSocios = new App\Usuario;

        $objSocios->idTipoUsuario = 3;
        $objSocios->Nombre = 'Nelson';
        $objSocios->Apellido = 'Juárez';
        $objSocios->fechaNacimiento = '1988-08-29';
        $objSocios->email = 'juarez.nd@gmail.com';
        $objSocios->telefono =null;
        $objSocios->activo = true;
        $objSocios->eliminado = false;
        //print_r($objSocios); die();
        $objSocios->save();
        return back()->with('error', 0);
    }
}    
