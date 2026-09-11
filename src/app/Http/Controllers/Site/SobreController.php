<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\SobreFisio;
use App\Models\Parceiro;
use App\Models\Avaliacao;
use App\Models\Faq;

class SobreController extends Controller{
    public function sobre(){
        $listaFisio = SobreFisio::where('status_sobre_fisio', 'ATIVO')
        ->get();
        //dd($listaFisio);

        $listaParceiro = parceiro::where('status_parceiro', 'ATIVO')
        ->inRandomOrder()
        ->get();
        

        $listaFaq = Faq::where('status_faq', 'ATIVO')
        ->inRandomOrder()
        ->get();
        //dd($listaFaq);

        $listaAvaliacao = Avaliacao::with('AvaliacaoCliente')
        ->where('status_avaliacao', 'ATIVO')
        ->orderByDesc('id_avaliacao')
        ->get();

     
        return view('site.sobre.sobre_pg', compact( 'listaAvaliacao', 'listaFaq', 'listaFisio', 'listaParceiro'));
    }
}