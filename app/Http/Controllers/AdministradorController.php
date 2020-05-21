<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

class AdministradorController extends Controller
{
    public function agregar(Request $req) {

        $reglas = [
            "nombre" => "string|min:5|unique:administradores, nombre",
            "password" => "string|min:5"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute debe tener como mínimo :min caracteres",
            "unique" => "El nombre del campo :attribute ya se encuentra registrado"
        ];

        $this->validate($req, $reglas, $mensajes);

        $password = password_hash($req['password'], PASSWORD_DEFAULT);
        $nuevoAdmin = new Admin();
        $nuevoAdmin->name = $req['name'];
        $nuevoAdmin->password = $password;

        $nuevoAdmin->save();
        return redirect("/administrador/agregaradministrador");
    }

    public function listado() {
        $administradores = Admin::all();
        $vac = compact("administradores");
        return view("listadeadministradores", $vac);
    }

    public function borrar(Request $req) {
        $id = $req['id'];
        $adminaborrar = Admin::find($id);
        $adminaborrar->delete();
        return redirect('/administrador/listaadministradores');
    }

    public function modificar(Request $req) {
        $id = $req['id'];
        $adminaeditar = Admin::find($id);
        $vac = compact("adminaeditar","id");
        return view("modificaradmin", $vac);
       
    }

    public function editar(Request $req) {
        $id = $req['id'];
        $adminaeditar = Admin::find($id);

        $reglas = [
            "nombre" => "string|min:5|unique:administradores, nombre",
            "password" => "string|min:5"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute debe tener como mínimo :min caracteres",
            "unique" => "El nombre del campo :attribute ya se encuentra registrado"
        ];

        $this->validate($req, $reglas, $mensajes);

        
       
        $vac = compact("adminaeditar");
        $adminaeditar->name = $req['name'];
        $password = password_hash($req['password'], PASSWORD_DEFAULT);
        $adminaeditar->password = $password;
        $adminaeditar->save();
        return redirect("/administrador/listaadministradores");
    }
}
