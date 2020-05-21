<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Productos;

use App\Seccion;

class ProductosController extends Controller
{
    public function agregar(Request $req) {

        $reglas = [
            "nombre" => "string|min:5|unique:productos, nombre",
            "precio" => "numeric|min:1",
            "stock" => "numeric|min:1",
            "imagen" => "file",
            "seccion" => "min:1"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "numeric" => "El campo :attribute debe ser un numero",
            "min" => "El campo :attribute debe tener como mínimo valor el :min",
            "unique" => "El nombre del campo :attribute ya se encuentra registrado",
            "file" => "En el campo :attribute debe subir un archivo"
        ];

        $this->validate($req, $reglas, $mensajes);

       $productoNuevo = new Productos();

       $ruta = $req->file("imagen")->store("public");
       $nombreArchivo = basename($ruta);

        $productoNuevo->imagen = $nombreArchivo;
        $productoNuevo->name = $req["name"];
        $productoNuevo->precio = $req["precio"];
        $productoNuevo->seccion = $req["seccion"];
        $productoNuevo->stock = $req["stock"];

        $productoNuevo->save();
        return redirect("/administrador/agregarproducto");
    }

    public function listado() {
        $todos = Productos::all();
        $vac = compact("todos");
        return view("listaproductos", $vac);
    }

    public function formulario() {
        $secciones = Seccion::all();
        $vac = compact("secciones");
        return view("agregarproducto", $vac);
    }

    public function borrar(Request $req) {
        $id = $req['id'];
        $productoaborrar = Productos::find($id);
        $productoaborrar->delete();
        return redirect('/administrador/listaproductos');
    }


    public function modificar(Request $req) {
        $id = $req['id'];
        $secciones = Seccion::all();
        $prodaeditar = Productos::find($id);
        $vac = compact("prodaeditar","id", "secciones");
        return view("modificarproducto", $vac);
       
    }

    public function editar(Request $req) {
        $id = $req['id'];
        $prodaeditar = Productos::find($id);

        $reglas = [
            "nombre" => "string|min:5|unique:productos, nombre",
            "precio" => "numeric|min:1",
            "stock" => "numeric|min:1",
            "imagen" => "file",
            "seccion" => "min:1"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "numeric" => "El campo :attribute debe ser un numero",
            "min" => "El campo :attribute debe tener como mínimo valor el :min",
            "unique" => "El nombre del campo :attribute ya se encuentra registrado",
            "file" => "En el campo :attribute debe subir un archivo"
        ];

        $this->validate($req, $reglas, $mensajes);


        
       
        $vac = compact("prodaeditar");
        $prodaeditar->name = $req['name'];
        $ruta = $req->file("imagen")->store("public");
        $nombreArchivo = basename($ruta);
 
         $prodaeditar->imagen = $nombreArchivo;
         $prodaeditar->precio = $req["precio"];
         $prodaeditar->seccion = $req["seccion"];
         $prodaeditar->stock = $req["stock"];
 
         $prodaeditar->save();
        return redirect("/administrador/listaproductos");
    }
}
