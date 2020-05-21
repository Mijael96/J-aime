<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Users;

class UsuarioController extends Controller
{
    public function listado() {
        $usuarios = Users::all();
        $vac = compact("usuarios");
        return view("listadeusuarios", $vac);
    }

    public function borrar(Request $req) {
        $id = $req['id'];
        $usuarioaborrar = Users::find($id);
        $usuarioaborrar->delete();
        return redirect('/administrador/listadeusuario');
    }
}
