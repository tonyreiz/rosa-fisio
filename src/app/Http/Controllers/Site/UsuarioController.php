<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Usuario;

class UsuarioController extends Controller{

    public function usuario(){
        $listaUsuario = Usuario::orderByDesc('id_usuario')
        ->get();
    return view('admin.usuario.index', compact('listaUsuario'));
    }
}