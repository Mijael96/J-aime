<?php

use app\Admin;

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdministradorController extends Controller
{
    public function agregar(Request $req) {

        $nuevoAdmin = new Admin;
        $nuevoAdmin->nombre = $req['nombre'];
        $nuevoAdmin->contraseña = $req['password'];

        $nuevoAdmin->save();
        return redirect("/administrador/agregaradministrador");
    }

    public function listado() {
        $administradores = Admin::all();
        dd($administradores);
    }
}
