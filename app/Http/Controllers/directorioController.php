<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class directorioController extends Controller
{
    //
    public function index(){
        $directorios = Directorio::all();
        return view('directorio', compact('directorios'));
    }

    public function create(){
        return view('crearEntrada');
    }

    public function store(Request $request){
        $nvoDirectorio = new Directorio();
        $nvoDirectorio->codigoEntrada = $request->input('codigoEntrada');
        $nvoDirectorio->nombre = $request->input('nombre');
        $nvoDirectorio->apellido = $request->input('apellido');
        $nvoDirectorio->telefono  = $request->input('telefono');
        $nvoDirectorio->correo = $request->input('correo');
        
        $nvoDirectorio->save();

        $directorios = Directorio::all();
        return view('directorio', compact('directorios'));
    }

    public function search(){
        return view('buscar');
    }

    public function buscar(Request $request, $correo){
        $directorio = Directorio::find($correo);        
        $directorio->codigoEntrada = $request->input('codigoEntrada');
        $directorio->nombre = $request->input('nombre');
        $directorio->apellido = $request->input('apellido');

        return view('vercontactos');
    }

    public function watch(){
        return view('vercontactos');
    }

    public function delete(){
        return view('eliminar');
    }


}
