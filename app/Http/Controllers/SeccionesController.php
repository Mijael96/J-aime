<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Seccion;

class SeccionesController extends Controller
{
    public function agregar(Request $req) {
       
        $reglas = [
            "name" => "string|min:2",

        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute debe tener como mínimo :min caracteres",
            "unique" => "El nombre del campo :attribute ya se encuentra registrado"
        ];

        $this->validate($req, $reglas, $mensajes);
       
        $nuevaSeccion = new Seccion();

        
        $nuevaSeccion->name = $req['name'];
      
      

        $nuevaSeccion->save();
        return redirect('/administrador/agregarseccion');
    }

    public function listado() {
        $secciones = Seccion::all();
        $vac = compact("secciones");
        return view("listadesecciones", $vac);
    }

    public function borrar(Request $req) {
        $id = $req['id'];
        $seccionaborrar = Seccion::find($id);
        $seccionaborrar->delete();
        return redirect('/administrador/listadesecciones');
    }

    public function modificar(Request $req) {
        $id = $req['id'];
        $seccaeditar = Seccion::find($id);
        $vac = compact("seccaeditar","id");
        return view("modificarseccion", $vac);
       
    }

    public function editar(Request $req) {
        $id = $req['id'];
        $secaeditar = Seccion::find($id);

        
        $reglas = [
            "name" => "string|min:2",

        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute debe tener como mínimo :min caracteres",
            "unique" => "El nombre del campo :attribute ya se encuentra registrado"
        ];

        $this->validate($req, $reglas, $mensajes);

        $this->validate($req, $reglas, $mensajes);


        
       
        $vac = compact("secaeditar");
        $secaeditar->name = $req['name'];
 
 
         $secaeditar->save();
        return redirect("/administrador/listadesecciones");
    }
}
