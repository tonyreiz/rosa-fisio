<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Servico;
use App\Models\Parceiro;

class AdminController extends Controller{

    public function dash(){
    
    $qtdeCliente = Cliente::where('status_cliente', 'ATIVO')
    ->count();
    $qtdeServico = Servico::Where('status_servico_resumo', 'ATIVO')
    ->count();

    $qtdeParceiro = Parceiro::where('status_parceiro', 'ATIVO')
    ->count();
    return view('admin.dashboard', compact('qtdeCliente', 'qtdeServico', 'qtdeParceiro'));
    }
}