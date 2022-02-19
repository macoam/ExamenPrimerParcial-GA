<?php

namespace App\Http\Controllers;

use App\Funcion;

use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function index() {
        $funciones = Funcion::all();
        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('funciones.index',$argumentos);
    }

    public function create() {
        return view('funciones.create');
    }

    public function store(Request $request) {
        $nuevafuncion = new Funcion();
        $nuevafuncion->pelicula = $request->input('pelicula');
        $nuevafuncion->fecha = $request->input('fecha');
        $nuevafuncion->hora = $request->input('hora');

        if ($nuevafuncion->save()) {

            return redirect()->route('funciones.index')->
            with('exito', 'La función ha sido guardada');

        }

        return redirect()->route('funciones.index')->returnwith('error', "No se pudo añadir");

    }

    public function destroy($id) {
        $funcion = Funcion::find($id);
    
        if($funcion->delete()) {
            return redirect()->
            route('funciones.index')-> 
            with('exito', 'Función eliminada');
    
        }
        return redirect()->route('funciones.index')->
        with('error', 'No se puede eliminar la funcion');
    }
    

}



