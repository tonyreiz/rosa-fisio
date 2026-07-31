<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Avaliacao;
use App\Models\Descricao;
class HomeController extends Controller{

    public function home(){
        
        $listaBanner = Banner::where('status_banner', 'ATIVO')->inRandomOrder()->get();
        //dd($listaBanner);

        $listaAvaliacao = Avaliacao::with('AvaliacaoCliente')
        ->where('status_avaliacao', 'ATIVO')
        ->orderByDesc('id_avaliacao')
        ->get();
     


        return view('site.home.home', compact('listaBanner', 'listaAvaliacao'));
    }
}