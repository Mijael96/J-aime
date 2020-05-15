<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Seccion;

class SeccionesController extends Controller
{
    public function agregar(Request $req) {
        $nuevaSeccion = new Seccion();

        
        $nuevaSeccion->nombre = $req['nombre'];
        $nuevaSeccion->cantidad = $req['cantidad'];
      
      

        $nuevaSeccion->save();
        return redirect('/administrador');
    }
}
