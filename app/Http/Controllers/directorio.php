<?php

namespace App\Http\Controllers;

namespace App\Models\directorio;

use Illuminate\Http\Request;



class directorio extends Controller
{
    //crear nueva Entrada Directorio 
    public function create(){
        return view('crearEntrada');
    }
    
    //Buscar en el directorio
    public function search(){
        return view('buscar');
    }
}
