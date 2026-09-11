<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Avaliacao;

class AvaliacaoController extends Controller{

    public function avaliacao(){
        $listaAvaliacao = Avaliacao::orderByDesc('id_avaliacao')
        ->get();
    return view('admin.avaliacao.index', compact('listaAvaliacao'));
    }
}