<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Avaliacao;
class ServicoController extends Controller{

    public function servico(){

    $listaAvaliacao = Avaliacao::with('AvaliacaoCliente')
    ->where('status_avaliacao', 'ATIVO')
    ->orderByDesc('id_avaliacao')
    ->get();
     
        return view('site.servico.servico_pg', compact( 'listaAvaliacao'));
    }
}