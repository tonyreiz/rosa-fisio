<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Avaliacao;

class SobreController extends Controller{
    public function sobre(){
        $listaAvaliacao = Avaliacao::with('AvaliacaoCliente')
        ->where('status_avaliacao', 'ATIVO')
        ->orderByDesc('id_avaliacao')
        ->get();
     
        return view('site.sobre.sobre_pg', compact( 'listaAvaliacao'));
    }
}