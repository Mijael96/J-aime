<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Users;

class UsuarioController extends Controller
{
    public function listado() {
        $adminLog= Auth::user(); 
        if($adminLog==null) {
            return redirect('/');
        }
        $usuarios = Users::all();
        $vac = compact("usuarios");
        return view("listadeusuarios", $vac);
    }

    public function borrar(Request $req) {
        $adminLog= Auth::user(); 
        if($adminLog==null) {
            return redirect('/');
        }
        $id = $req['id'];
        $usuarioaborrar = Users::find($id);
        $usuarioaborrar->delete();
        return redirect('/administrador/listadeusuario');
    }
}
