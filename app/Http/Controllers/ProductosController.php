<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Productos;

class ProductosController extends Controller
{
    public function agregar(Request $req) {
       $productoNuevo = new Productos();

       $ruta = $req->file("imagen")->store("public");
       $nombreArchivo = basename($ruta);

        $productoNuevo->imagen = $nombreArchivo;
        $productoNuevo->nombre = $req["nombre"];
        $productoNuevo->precio = $req["precio"];
        $productoNuevo->seccion = $req["seccion"];

        $productoNuevo->save();
        return redirect("/administrador");
    }
}
