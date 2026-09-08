<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Servico;

class AdminservicoController extends Controller{

    public function servicos(){

    $listaServico = Servico::orderByDesc('id_servico_resumo')
    ->get();

    return view('admin.servico.index', compact('listaServico'));
    }
}