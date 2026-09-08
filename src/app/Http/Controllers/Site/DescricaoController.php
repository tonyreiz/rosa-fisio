<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Descricao;

class DescricaoController extends Controller{
    
    public function descricao(){
        $listaDescricao = Descricao::orderByDesc('id_descricao_servico')
        ->get();
    return view('admin.descricao.index', compact('listaDescricao'));
    }
}

